<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class varian extends Model
{
     protected $table = 'varian';

     protected $fillable = [
        'id_varian', 
        'id_merk', 
        'nama_varian', 
        'img_varian'
    ];

     public function varian()
    {
        return $this->belongsTo(Varian::class);
    }
}
