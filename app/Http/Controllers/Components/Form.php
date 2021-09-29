<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use App\Models\Records;
class Form extends Component
{
    public function render()
    {
        return view('components.form')->extends('layouts.app');
    }
}
