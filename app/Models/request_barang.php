<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_barang extends Model
{

    protected $table = "request_barang";
    protected $primaryKey = 'kode_r';
    protected $fillable = ['kode_r', 'nama_r', 'jenis_r', 'stock_r'];
    
}
