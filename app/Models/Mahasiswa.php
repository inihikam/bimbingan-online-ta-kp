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
        'nama',
        'nim',
        'email',
        'ipk',
        'telp',
        'transkrip',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'email', 'email');
    }

    public function statusMahasiswa()
    {
        return $this->hasOne(StatusMahasiswa::class, 'id_mhs', 'id');
    }

    public function periode()
    {
        return $this->hasMany(MahasiswaPeriodik::class, 'id_mhs', 'id');
    }
}
