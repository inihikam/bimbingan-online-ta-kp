<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaPeriodik extends Model
{
    use HasFactory;
    protected $table = 'mhs_periodik';
    protected $fillable = [
        'id_periode',
        'id_mhs',
    ];
    public function periode()
    {
        return $this->belongsTo(Periode::class, 'id_periode', 'id');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mhs', 'id');
    }
}
