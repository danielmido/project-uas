<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
     protected $fillable = [
     'id', 
     'nama_pelanggan', 
     'jenis_kelamin', 
     'no_telepon'
    ];
}
