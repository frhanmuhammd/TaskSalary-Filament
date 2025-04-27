<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = [
        'kode_pegawai',
        'name',
        'kode_jabatan',
        'jk',
        'alamat',
        'email',
        'no_telp',
    ];
}
