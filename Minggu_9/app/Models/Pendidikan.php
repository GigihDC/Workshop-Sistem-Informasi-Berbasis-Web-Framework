<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    // tabelnya bernama pendidikan
    protected $table = 'pendidikan';
    // primary keynya bernama id
    protected $primaryKey = 'id';
    // dan row lainnya bernama nama, tingkatan, tahun_masuk, dan tahun_keluar
    protected $fillable = [
        'nama', 'tingkatan', 'tahun_masuk', 'tahun_keluar'
    ];
}
