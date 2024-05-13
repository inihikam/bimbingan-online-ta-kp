<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSidang extends Model
{
    use HasFactory;
    protected $table = 'detail_sidang';
    protected $fillable = [
        'periode',
        'tanggal',
        'waktu',
        'ruang_sidang',
        'penguji_1',
        'penguji_2',
    ];
    public function jadwal()
    {
        return $this->belongsTo(JadwalSidang::class, 'periode', 'periode');
    }
    public function detail()
    {
        return $this->hasMany(StatusMahasiswa::class, 'id', 'jadwal_sidang');
    }
}
