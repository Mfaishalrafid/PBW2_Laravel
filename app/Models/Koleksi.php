<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;
    // Nama    : M.Faishal Rafid
    // NIM     : 6706223073
    // Kelas   : D3IF-4603
    protected $table = 'koleksi';
    
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
        'jumlahKeluar',
        'jumlahSisa'
    ];
}