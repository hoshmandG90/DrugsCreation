<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\invoice;

class stocks extends Model
{
    protected $guarded =[];
    protected $table="stocks";

    public static function search($search){
        return empty($search) ? static::query() :
        static::where('patinet_name','LIKE','%'.$search.'%')
        ->orWhere('invoice_id','LIKE','%'.$search.'%')
        ->orWhere('name_medicine','LIKE','%'.$search.'%')
        ->orWhere('created_at','LIKE','%'.$search.'%');
        }
}
