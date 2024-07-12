<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    use HasFactory;

    protected $table = 'pembina';

    protected $fillable = [
        'nama', 'gender', 'tgl_lahir', 'tmp_lahir', 'keahlian'
    ];

    public $timestamps = false;

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}