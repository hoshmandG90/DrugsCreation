<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use App\Models\Records;
use App\Models\Medicine;
use App\Models\Stocks;
use App\Models\invoice;
class Prints extends Component
{
    public function render()
    {
        $invoices=Medicine::all();

        $LastDate=Stocks::latest()->first();
        return view('components.prints',compact('invoices','LastDate'));
    }
}
