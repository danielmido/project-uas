<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
     protected $table = 'kendaraan';

     protected $fillable = [
        'id_kendaraan', 
        'id_variasi', 
        'tipe_kendaraan', 
        'tahun_kendaraan',
        'transmisi_kendaraan',
        'plat_kendaraan',
        'harga_kendaraan',
        'kapasitasMesinOP_kendaraan',
        'kilometerOP_kendaraan',
        'bahanBakarOP_kendaraan',
        'warnaFisikOP_kendaraan',
        'img_kendaraan'
    ];

     public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
