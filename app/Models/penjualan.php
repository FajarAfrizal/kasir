<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, 'pelanggan_id');
    }
}
