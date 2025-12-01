<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = ['nama', 'kapasitas', 'layout'];

    public function films()
    {
        return $this->hasMany(Film::class);
    }

    public function kursi()
    {
        return $this->hasMany(Kursi::class);
    }
}
