<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    

        use HasFactory;
        
        //table name
        protected $table = "supplier";
        //fields
         protected $fillable = [

        'name',
        'contact',
        'address',
        'contact_person',
        'category',

         ];        

}