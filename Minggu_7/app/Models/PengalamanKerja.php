<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    use HasFactory;
    // tabelnya bernama pengalaman_kerja
    protected $table = 'pengalaman_kerja';
    // primary keynya bernama id
    protected $primaryKey = 'id';
    // dan row lainnya berisi nama, jabatan, tahun masuk, dan tahun keluar
    protected $fillable = [
        'nama', 'jabatan', 'tahun_masuk', 'tahun_keluar'
    ];
}
