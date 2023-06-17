<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang', 'nama_barang', 'harga_barang','deskripsi_barang','satuan_barang'];
    protected $primaryKey = 'kode_barang';

    public function satuan(){
        return $this->belongsTo(Satuan::class,'kode_satuan', 'kode_satuan');
    }
}
