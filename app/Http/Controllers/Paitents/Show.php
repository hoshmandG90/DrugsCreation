<?php

namespace App\Http\Controllers\Paitents;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('paitents.show')->extends('layouts.app');
    }
}
