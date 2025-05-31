<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    protected $table = 'varian';

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'merk_id', 'id');
        
    }
    
    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'varian_id', 'id');
    }
    
}
