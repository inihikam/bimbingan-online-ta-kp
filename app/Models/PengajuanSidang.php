<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSidang extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_sidang';
    protected $fillable = [
        'id_mhs',
        'id_dospem',
        'judul',
        'bidang_kajian',
        'dokumen',
        'jadwal_sidang',
    ];
}
