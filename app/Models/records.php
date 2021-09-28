<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class records extends Model
{
    protected $guarded =[];
    protected $table="records";



    public static function search($search){
        return empty($search) ? static::query() :
        static::where('name_drug','LIKE','%'.$search.'%')
        ->OrWhere('category','LIKE','%'.$search.'%')
        ->OrWhere('created_at','LIKE','%'.$search.'%');
    }
}
