<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'status_mahasiswa';
    protected $fillable = [
        'id_mhs',
        'id_dospem',
        'nim',
        'ta_1',
        'ta_2',
        'bab_terakhir',
        'jml_bimbingan',
        'status',
        'sidang_ta_1',
        'sidang_ta_2',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function logbook()
    {
        return $this->hasMany(LogbookBimbingan::class, 'id_mhs', 'id_mhs');
    }
    public function dospem()
    {
        return $this->belongsTo(Dosen::class, 'id_dospem', 'id_dospem');
    }
}
