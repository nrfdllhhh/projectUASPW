<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';

    protected $fillable = [
        'nama', 'modal', 'pemilik', 'alamat', 'website', 'email', 
        'kabkota_id', 'kategori_umkm_id', 'pembina_id', 'rating'
    ];

    public $timestamps = false;

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class);
    }

    public function kategoriUmkm()
    {
        return $this->belongsTo(Kategori_umkm::class);
    }

    public function pembina()
    {
        return $this->belongsTo(Pembina::class);
    }
}