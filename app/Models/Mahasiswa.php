<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'ipk',
        'transkrip_nilai',
        'telp_mhs',
        'email',
        'dosen_wali',
    ];
    public function user()
    {
        return $this->hasOne(Mahasiswa::class, 'email', 'email');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_pembimbing', 'nip');
    }
    public function statusMahasiswa()
    {
        return $this->hasOne(StatusMahasiswa::class, 'nim', 'nim');
    }
}
