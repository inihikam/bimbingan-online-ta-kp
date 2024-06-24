<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'nama',
        'npp',
        'email',
        'bidang_kajian',
        'scholar',
        'telp'
    ];

    public function logbook()
    {
        return $this->hasMany(LogbookBimbingan::class, 'id_dsn', 'id');
    }

    public function mahasiswa()
    {
        return $this->hasMany(StatusMahasiswa::class, 'id_dsn', 'id');
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_dsn', 'id');
    }

    public function user()
    {
        return $this->hasOne(Dosen::class, 'email', 'email');
    }
    public function dosenPeriodik()
    {
        return $this->hasMany(DosenPeriodik::class, 'id_dsn', 'id');
    }
}
