<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebijakan extends Model
{
    protected $table = 'kebijakan_pimpinan';

    protected $fillable = [
        'judul',
        'isi',
        'file' // opsional jika unggah dokumen PDF dll
    ];
}
