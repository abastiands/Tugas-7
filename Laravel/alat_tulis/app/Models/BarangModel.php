<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    //kita beritahu kalau tabel yang kita gunakan adalah tabel bernama barang
    //
    protected $primaryKey = 'kode_barang';
    //kita beritahu kalau PK kita adalah kode_barang bukan id
}
