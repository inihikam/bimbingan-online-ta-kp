<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSidang extends Model
{
    use HasFactory;
    protected $table = 'jadwal_sidang';

    protected $fillable = [
        'periode',
        'tanggal',
        'kuota',
        'status'
    ];
    public function status()
    {
        return $this->hasMany(StatusMahasiswa::class, 'periode', 'periode_sidang');
    }
    public function detail()
    {
        return $this->hasMany(DetailSidang::class, 'periode', 'periode');
    }
}
