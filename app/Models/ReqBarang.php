<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReqBarang extends Model
{
    use HasFactory;
    protected $fillable = ['pegawai_id', 'barang_id', 'kuantiti', 'tgl_req', 'keterangan'];
}
