<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogbookBimbingan extends Model
{
    use HasFactory;

    protected $table = 'logbook_bimbingan';
    protected $fillable = [
        'id_logbook',
        'id_mhs',
        'id_dospem',
        'tanggal_bimbingan',
        'uraian_bimbingan',
        'bab_terakhir_bimbingan',
        'status_logbook',
        'checklist',
        'dokumen'
    ];

    protected $primaryKey = 'id_logbook';
    public function mahasiswa()
    {
        return $this->belongsTo(StatusMahasiswa::class, 'id_mhs', 'id_mhs');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dospem', 'id_dospem');
    }
}
