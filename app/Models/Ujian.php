<?php

namespace App\Models;

use App\Models\Pertanyaan;
use App\Models\Soal;


use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';

    protected $fillable = ['judul', 'deskripsi', 'batas_waktu', 'departemen', 'durasi'];
    public function soal()
    {
        return $this->hasMany(Soal::class);
    }

}
