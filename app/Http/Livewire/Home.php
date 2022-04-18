<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Home as HomeModel;

use App\Http\Livewire\DataTable\WithPerPagePagination;

class Home extends Component
{
    
    public function render()
    {
        return view('livewire.home', [
            'items' => HomeModel::all(),
        ]);
    }
}
