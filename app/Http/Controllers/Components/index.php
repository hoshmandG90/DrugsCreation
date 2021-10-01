<?php

namespace App\Http\Controllers\Components;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Records;
use App\Models\Medicine;
use App\Models\Stocks;
use App\Models\Invoice;
use Illuminate\support\Facades\DB;
class index extends Component
{
    use WithPagination;

    public $patinent;
    public $name;
    public $types;
    public $count;
    public $notes;

    public $ShowMedcinie=false;

    public $search;

    public $invoice_id;

   

    public function mount(){
        $this->invoice_id=Invoice::OrderBy('id','DESC')->first();

    }

    public function StoreMedicine(){

        $this->Validate([
            'patinent' =>'required|string',
            'name' =>'required',
            'count' =>'required',
            'types' =>'required',
            'notes' =>'required'
        ]);   

      

        stocks::create([
            'patinet_name'=>$this->patinent,
            'invoice_id'=>$this->invoice_id->id,
            'name_medicine'=>$this->name,
            'types'=>$this->types,
            'count' =>$this->count,
            'note'=>$this->notes,
        ]);
        Medicine::create([
            'patinet_name'=>$this->patinent,
            'name_medicine'=>$this->name,
            'types'=>$this->types,
            'count' =>$this->count,
            'note'=>$this->notes,
        ]);

    }

    public function ResetInvoices(){
       $createNewInvoices =new invoice();
       $createNewInvoices->number=1;
       $createNewInvoices->save();

       Medicine::query()->truncate();
    }

    public function back(){
        return redirect()->to(route('medicine'));
        
    }



    public function delete($MedicineID){

      Medicine::findOrFail($MedicineID)->delete();
    }
    public function render()
    {
        $records = Records::all();
        $Medicines =Medicine::search($this->search)->latest()->paginate(20);


        return view('components.index',compact('records','Medicines'))->extends('layouts.app');
    }
}
