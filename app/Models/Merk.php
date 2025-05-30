<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merk';
    //
    public function varian()
    {
        return $this->hasMany(Varian::class, 'merk_id', 'id');
    }
}
