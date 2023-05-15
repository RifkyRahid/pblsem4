<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_barang extends Model
{
    
    protected $table = "data_barang";
    protected $primaryKey = 'kode_d';
    protected $fillable = ['kode_d', 'nama_d', 'jenis_d', 'stock_d'];
    
}