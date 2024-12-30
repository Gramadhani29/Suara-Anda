<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'pengaduan';

    protected $fillable = [
        'user_id',      // ID pelapor
        'victim_name',  // Nama korban
        'victim_gender',// Jenis kelamin korban
        'description',  // Deskripsi kejadian
        'location',     // Lokasi kejadian
        'incident_date',// Tanggal kejadian
        'status',       // Status laporan (Diproses, Ditutup, dll.)
        'evidence',     // Bukti (file atau URL)
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function responses()
    {
        return $this->hasMany(Tanggapan::class, 'pengaduan_id', 'id');
    }
}
