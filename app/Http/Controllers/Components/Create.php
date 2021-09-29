<?php

namespace App\Http\Controllers\Components;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Records;
use App\Models\Medicine;
class Create extends Component
{

    public $patinent;
    public $name;
    public $types;
    public $count;
    public $notes;

    public $ShowMedcinie=false;

    public function StoreMedicine(){
        $this->Validate([
            'patinent' =>'required|string',
            'name' =>'required',
            'count' =>'required',
            'types' =>'required',
            'notes' =>'required'
        ]);
        Medicine::create([
            'patinet_name'=>$this->patinent,
            'name_medicine'=>$this->name,
            'types'=>$this->types,
            'count' =>$this->count,
            'note'=>$this->notes,
        ]);
        $this->clear();

    }

    private function clear(){
     $this->reset(['name','types','count','notes','patinent']);
    }
    public function render()
    {
        $records = Records::all();
        $Medicines =Medicine::latest()->paginate(20);


        return view('components.create',compact('records','Medicines'))->extends('layouts.app');
    }
}
