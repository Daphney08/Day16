<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "distribution";
    //fields
     protected $fillable = [

    'requestor_name',
    'requestor_contact',
    'purpose',
    'asset_id',
    'quantity',
    'status',
  
     ];        

}