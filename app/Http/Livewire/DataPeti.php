<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PetiKemasDokumenPabean as PetiKemasDokumenPabeanModel;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Livewire\WithFileUploads;
use Auth;

class DataPeti extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'search' => '',
        'nomor_pengajuan_dokumen' => '',
    ];
    public PetiKemasDokumenPabeanModel $editing;
    public $upload;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.nomor' => 'required',
        'editing.tipe' => 'required',
        'editing.ukuran' => 'required',
    ]; }

    public function mount($nomor_aju_pabean) { 
        $this->filters['nomor_pengajuan_dokumen'] = $nomor_aju_pabean;
        $this->editing = $this->makeBlankTransaction();
    }
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
        return PetiKemasDokumenPabeanModel::make(['date' => now(), 'status' => 'success']);
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

    public function edit(PetiKemasDokumenPabeanModel $transaction)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($transaction)) $this->editing = $transaction;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->editing->fill([
            'nomor_pengajuan_dokumen' => $this->filters['nomor_pengajuan_dokumen'],
        ]);

        $this->emitSelf('notify-saved');

        $this->editing->save();

        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = PetiKemasDokumenPabeanModel::query()
            ->when($this->filters['search'], fn($query, $search) => $query->where('seri', $search ))
            ->when($this->filters['nomor_pengajuan_dokumen'], fn($query, $nomor_pengajuan_dokumen) => $query->where('nomor_pengajuan_dokumen', $nomor_pengajuan_dokumen));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('livewire.data-peti', [
            'items' => $this->rows,
            'nomor_aju_pabean' => $this->filters['nomor_pengajuan_dokumen'],
        ]);
    }
}
