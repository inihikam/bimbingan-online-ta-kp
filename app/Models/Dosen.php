<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen_pembimbing';

    protected $fillable = [
        'id_dospem',
        'nama',
        'npp',
        'bidang_kajian',
        'kuota_mhs_ta',
        'jml_ajuan',
        'acc_ajuan',
        'sisa_kuota',
        'status_dospem',
        'email_dosen',
        'telp_dosen',
        'photo',
        'scholar'
    ];

    public function logbook()
    {
        return $this->hasMany(LogbookBimbingan::class, 'id_dospem', 'id_dospem');
    }
    public function mahasiswa()
    {
        return $this->hasMany(StatusMahasiswa::class, 'id_dospem', 'id_dospem');
    }
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_dospem', 'id_dospem');
    }
    public function user()
    {
        return $this->hasOne(Dosen::class, 'email', 'email');
    }
}
