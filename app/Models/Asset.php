<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public function index();
    {
        protected $table ='assets';

        protected $fillable = [
            'name',
            'description',
            'category',
            'supplier_id',
            'storage_id',
            'total_stock'
        ];
    }

    
}
