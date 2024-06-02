<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
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
        return $this->hasOne(User::class, 'email', 'email');
    }
    public function statusMahasiswa()
    {
        return $this->hasOne(StatusMahasiswa::class, 'nim', 'nim');
    }
}
