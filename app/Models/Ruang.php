<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';
    protected $primaryKey = 'r_id';
    public $incrementing = true;
    protected $fillable = [
        'r_nama'
       ,'r_lokasi'
    ];
    public function gedung()
    {

        return $this->belongsTo(\App\Models\Gedung::class,'g_id','g_id');

    }
}
