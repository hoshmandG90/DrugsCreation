<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    protected $guarded =[];
    protected $table="medicines";

    public static function search($search){
        return empty($search) ? static::query() :
        static::where('patinet_name','LIKE','%'.$search.'%');
        }
}
