<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "transportation";
    //fields
     protected $fillable = [

    'plate_number',
    'driver_name',
    'driver_contact',
    'notes',
    
   

  
     ];        

}