<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model

{
    use HasFactory;

    protected $table = 'alternatifs';
    protected $fillable = ['id_kategori', 'nama', 'image', 'deskripsi', 'program_kerja', 'prestasi', 'jumlah_anggota'];

    // Relasi Many-to-One: Alternatif (UKM) memiliki satu Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
