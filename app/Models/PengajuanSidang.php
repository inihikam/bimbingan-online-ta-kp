<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSidang extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_sidang';
    protected $fillable = [
        'judul',
        'topik',
        'judul',
        'bidang_kajian',
        'keyword',
        'deskripsi',
        'catatan',
        'id_dosen',
        'status',
    ];
}
