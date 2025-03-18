<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    use HasFactory;

    protected $table = 'kategoris';
    protected $fillable = ['nama'];

    // Relasi One-to-Many: Kategori memiliki banyak Alternatif (UKM)
    public function alternatifs()
    {
        return $this->hasMany(Alternatif::class, 'id_kategori', 'id');
    }
}
