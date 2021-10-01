<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Records;
use App\Models\Medicine;
use App\Models\Stocks;
use App\Models\Invoice;

class Show extends Component
{
    use WithPagination;

    public $selectedPage=5;

    public $search;
    protected $queryString=['search'];

    public function delete($id){
        Stocks::findorfail($id)->delete();
    }
    public function render()
    {
        $Stocks=Stocks::search($this->search)->latest()->paginate($this->selectedPage);
        return view('components.show',compact('Stocks'))->extends('layouts.app');
    }
}
