<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPenjualan extends Model
{
    use HasFactory;
    protected $table = 'detail_penjualan';
    protected $guarded = ['id'];
}
