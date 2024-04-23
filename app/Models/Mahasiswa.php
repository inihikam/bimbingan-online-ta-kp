<?php

namespace App\Models;

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
        'email_mhs',
        'dosen_pembimbing',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'email_mhs', 'email');
    }
    public function statusMahasiswa()
    {
        return $this->hasOne(StatusMahasiswa::class, 'nim', 'nim');
    }
}
