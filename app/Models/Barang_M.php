<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_M extends Model
{
  
        use HasFactory;
        protected $table = 'tbl-barang';
        protected $guarded = ['id'];
    
}
