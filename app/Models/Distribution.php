<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

    public function index();
    {
        protected $table ='distribution';

        protected $fillable = [
            'requestor_name',
            'requestor_contact',
            'purpose',
            'asset_id',
            'quantity',
            'Status'
        ];
    }
}
