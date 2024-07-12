<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    use HasFactory;

    protected $table = 'kabkota';
    protected $fillable = [
        'nama', 'provinsi_id', 'latitude', 'longitude'
    ];

    public $timestamps = false;

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}
