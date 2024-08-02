<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'Surat';

    // Relasi many to one nim ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'nim', 'nim');
    }
}
