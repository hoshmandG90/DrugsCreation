<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use App\Models\invoice as Invoices;
class Invoice extends Component
{

    public function ResetInvoices(){
        Invoices::query()->truncate();
      $invoice = new Invoices();
      $invoice->number=1;
      $invoice->save();

   
    }
    public function render()
    {
        return view('components.invoice');
    }
}
