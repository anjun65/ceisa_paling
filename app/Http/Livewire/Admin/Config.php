<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Config extends Component
{
    public function render()
    {
        return view('livewire.admin.config')->layout('layouts.admin');;
    }
}
