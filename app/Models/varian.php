<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class varian extends Model
{
     protected $table = 'varian';

     protected $fillable = [
        'id',
        'nama_tipe', 
        'img_tipe',
        'merk_id'
    ];

     public function varian()
    {
        return $this->belongsTo(Varian::class);
    }
}
