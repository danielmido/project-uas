<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';

    public function variasi()
    {
        return $this->belongsTo(Varian::class, 'variasi_id', 'id');
    }
    //
}
