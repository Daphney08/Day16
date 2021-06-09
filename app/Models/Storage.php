<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "storage";
    //fields
     protected $fillable = [

    'name',
    'building',
    'floor',
    'room',
    'cabinet',
     ];        

}