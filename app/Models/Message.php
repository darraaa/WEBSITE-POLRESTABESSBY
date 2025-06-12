<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Jika Anda memiliki pengaturan khusus untuk tabel ini, misalnya nama tabel
    protected $table = 'messages'; // Ganti 'messages' dengan nama tabel Anda jika berbeda

    // Definisikan relasi dengan pengguna (pengirim)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Definisikan relasi dengan pengguna (penerima)
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
