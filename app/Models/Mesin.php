<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function gedung(){
        return $this->belongsTo(Gedung::class);
    }
    public function merk_mesin(){
        return $this->belongsTo(Merk_mesin::class);
    }
    public function jenis_mesin(){
        return $this->belongsTo(Jenis_mesin::class);
    }
    public function kategori_mesin(){
        return $this->belongsTo(Kategori_mesin::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function teknisi_mesin(){
        return $this->belongsTo(Teknisi_mesin::class);
    }
}
