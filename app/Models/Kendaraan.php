<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';

    public function varian()
    {
        return $this->belongsTo(Varian::class, 'varian_id', 'id');
    }
    //
}