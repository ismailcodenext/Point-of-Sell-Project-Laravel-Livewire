<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.counter')->extends('layouts.app')->section('content');
    }

    public function addNew()
    {
        dd('here');
    }
}
