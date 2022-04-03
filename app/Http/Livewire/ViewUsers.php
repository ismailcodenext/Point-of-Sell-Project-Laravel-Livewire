<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewUsers extends Component
{
    public function render()
    {
        return view('livewire.view-users')->extends('layouts.app')->section('content');
    }
}
