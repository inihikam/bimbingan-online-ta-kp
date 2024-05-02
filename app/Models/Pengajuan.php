<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';

    protected $fillable = [
        'id_mhs',
        'topik',
        'judul',
        'bidang_kajian',
        'keyword',
        'deskripsi',
        'catatan',
        'id_dosen'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(StatusMahasiswa::class, 'id_mhs');
    }
}
