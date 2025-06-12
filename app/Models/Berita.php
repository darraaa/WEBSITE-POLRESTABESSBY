<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit jika tidak sesuai dengan konvensi Laravel
    protected $table = 'berita'; // Nama tabel harus sesuai dengan tabel yang ada di database

    // Tentukan field yang dapat diisi
    protected $fillable = [
        'judul', 'deskripsi', 'gambar', 'tanggal_upload'
    ];
}
