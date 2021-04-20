<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
    		'id',
    		'kode_barang',
            'nama_barang',
            'jenis_barang',
            'qty'

    ];
}
