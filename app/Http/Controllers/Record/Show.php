<?php

namespace App\Http\Controllers\Record;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Records;
class Show extends Component
{

    use WithPagination;


 public $ShowForm=false;



 //insert record
 public $name_drug;
 public $category;
 public $note;

 // Update record
 public $NewName;
 public $NewCategory;
 public $NewNote;




 public $ShowModelEdit=false;
 public $RecordsIdBeingUpdated=null;
 public $RecordsIdBeingRemoved=null;

 public $search;
 protected $queryString=['search'];
 


 protected $listeners=['deletedConfirmed'=>'deletedConfirmed'];


 public function store(){
     $Validation_data=$this->Validate([
         'name_drug' =>'required|string',
         'category' =>'required|string',
         'note' =>'required|max:255'
     ]);
     Records::create($Validation_data);
     session()->flash('message', 'بە سەرکەوتووی تۆمار کرا');

     


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
 
    $this->NewName =$record->name_drug;
    $this->NewCategory=$record->category;
    $this->NewNote=$record->note;
    $this->RecordsIdBeingUpdated=$record->id;

 }

 public function EditRecord(Records $record){
    $this->Validate([
        'NewName' =>'required|string',
        'NewCategory' =>'required|string',
        'NewNote' =>'required|max:255'
    ]);
  $record->update([
    'name_drug' =>$this->NewName,
    'category' =>$this->NewCategory,
    'note' =>$this->NewNote
  ]);
  session()->flash('message', 'بە سەرکەوتووی تۆمار کرا');

 }
 public function render()
    {
        $records =Records::search($this->search)->latest()->paginate(20);
        return view('record.show',compact('records'))->extends('layouts.app');
    }
}
