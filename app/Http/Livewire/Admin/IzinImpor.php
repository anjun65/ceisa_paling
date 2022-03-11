<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\IzinImpor as IzinModel;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Livewire\WithFileUploads;
use Auth;

class IzinImpor extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'search' => '',
        'status' => '',
        'perusahaan' => null,
        'date-min' => null,
        'date-max' => null,
    ];
    public IzinModel $editing;

    public $upload;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.perusahaan' => 'required',
        'editing.alamat_perusahaan' => 'required',
        'editing.nomor_izin_bpk' => 'required',
        'editing.tanggal_izin' => 'required',
        'editing.awal_berlaku' => 'required',
        'editing.akhir_berlaku' => 'required',

        'editing.npwp_perusahaan' => 'required',
        'editing.tanggal_izin' => 'required',
        'editing.nomor_surat' => 'required',
        'editing.tanggal_surat' => 'required',
        'editing.kantor_bc_ftz' => 'required',
        // 'editing.upload_dokumen' => 'required',
    ]; }

    public function mount() { $this->editing = $this->makeBlankTransaction(); }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'izin_impor.csv');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('Anda telah menghapus '.$deleteCount.' data.');
    }

    public function makeBlankTransaction()
    {
        return IzinModel::make(['date' => now(), 'status' => 'success']);
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) $this->editing = $this->makeBlankTransaction();

        $this->showEditModal = true;
    }

    public function edit(IzinModel $transaction)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($transaction)) $this->editing = $transaction;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->editing->fill([
            'status' => 'Disetujui',
        ]);

        $this->emitSelf('notify-saved');

        $this->editing->save();

        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = IzinModel::query()
            ->when($this->filters['status'], fn($query, $status) => $query->where('status', $status))
            ->when($this->filters['perusahaan'], fn($query, $perusahaan) => $query->where('perusahaan', 'like', '%'.$perusahaan.'%'))
            ->when($this->filters['date-min'], fn($query, $date) => $query->where('awal_berlaku', '>=', Carbon::parse($date)))
            ->when($this->filters['date-max'], fn($query, $date) => $query->where('akhir_berlaku', '<=', Carbon::parse($date)))
            ->when($this->filters['search'], fn($query, $search) => $query->where('nomor_izin_impor', 'like', '%'.$search.'%'));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function download_surat($id) 
    {
        $download = IzinModel::findorFail($id);
        return response()->download(storage_path('app/'.$download->upload_dokumen));
    }

    public function rejected($id)
    {
        $items = IzinModel::findorFail($id);
        $items->update(array('status' => 'Ditolak'));
        
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.izin-impor', [
            'izins' => $this->rows,
        ])->layout('layouts.admin');;
        
    }
}
