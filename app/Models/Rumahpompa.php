<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rumahpompa extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'nama_lokasi',
        'lokasi',
        'telepon',
        'tahun_pembuatan',
        'pembuat',
        'latitude',
        'longitude',
        'pdam',
        'keterangan',
        'pompa_air',
        'pln',
    ];

    protected $hidden = ["deleted_at"];
}

