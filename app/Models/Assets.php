<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "deliveries";
    //fields
     protected $fillable = [

    'distribution_id',
    'transportation_id',
    'date_distributed',
    'status',  
     ];        

}