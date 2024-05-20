<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPengajuan extends Model
{
    use HasFactory;
    protected $table = 'history_pengajuan';
    protected $fillable = [
        'id_mhs',
        'topik',
        'judul',
        'bidang_kajian',
        'keyword',
        'deskripsi',
        'catatan',
        'id_dospem',
        'status',
        'alasan_penolakan'
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(StatusMahasiswa::class, 'id_mhs', 'id_mhs');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dospem', 'id_dospem');
    }
}
