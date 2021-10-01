<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Records;
use App\Models\Medicine;
use App\Models\Stocks;
use App\Models\Invoice;
class Report extends Component
{
    use WithPagination;
    public function render()
    {
        $Stocks=Stocks::latest()->paginate(20);

        return view('components.report',compact('Stocks'))->extends('layouts.app');
    }
}
