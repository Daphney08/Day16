<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "assets";
    //fields
     protected $fillable = [

        'name', 
        'description',
        'category',
        'supplier_id',
        'storage_id',
        'total_stock'
          
     ];        

}