<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('components.create')->extends('layouts.app');
    }
}
