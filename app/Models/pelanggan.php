<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
     protected $fillable = [
     'id_pelanggan', 
     'nama_pelanggan', 
     'jenisKelamin_pelanggan', 
     'noTelp_pelanggan'
    ];
}
