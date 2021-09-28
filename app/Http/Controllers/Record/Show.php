<?php

namespace App\Http\Controllers\Record;

use Livewire\Component;
use App\Models\Records;
class Show extends Component
{


 public $ShowForm=false;

 // Close The Models
 public $closeModel=false;


 //insert record
 public $name_drug;
 public $category;
 public $note;

 // Update record
 public $NewName;
 public $NewCategory;
 public $NewNote;


 public $RecordsIdBeingRemoved=null;
 protected $listeners=['deletedConfirmed'=>'deletedConfirmed'];


 public function store(){
     $Validation_data=$this->Validate([
         'name_drug' =>'required|string',
         'category' =>'required|string',
         'note' =>'required|max:255'
     ]);


     Records::create($Validation_data);
     $this->dispatchBrowserEvent('success');


 }
 // Delete record with SweetAlert
 public function ConfirmRecordsRemoval($RecordID){
     $this->RecordsIdBeingRemoved=$RecordID;
     $this->dispatchBrowserEvent('show-delete-Confirmation');
 }
public function deletedConfirmed(){
   $records=Records::FindOrFail($this->RecordsIdBeingRemoved);
   $records->delete();
   $this->dispatchBrowserEvent('success-deleted');

 }
 // Updated with Models

 public function SelecetdToUpadetd(Records $record){
    $this->NewName =$record->name_drug;
    $this->NewCategory=$record->category;
    $this->NewNote=$record->note;

 }
 public function update(Records $record){
    $this->Validate([
        'NewName' =>'required|string',
        'NewCategory' =>'required|string',
        'NewNote' =>'required|max:255'
    ]);

    $record->update([
        'name_drug' =>$this->NewName,
        'category'=>$this->NewCategory,
        'note'=>$this->NewNote,
    ]);

    $this->closeModel=true;
    $this->dispatchBrowserEvent('success-updated');
    
 }
 public function render()
    {
        $records =Records::latest()->get();
        return view('record.show',compact('records'))->extends('layouts.app');
    }
}
