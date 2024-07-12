<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_umkm extends Model
{
    use HasFactory;

    protected $table = 'kategori_umkm';

    protected $fillable = [
        'nama'
    ];

    public $timestamps = false;

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}