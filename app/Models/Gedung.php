<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    protected $table = 'gedung';
    protected $primaryKey = 'g_id';
    public $incrementing = true;
    protected $fillable = [
        'g_nama'
       ,'g_lokasi'
    ];
    public function ruang()
    {

        return $this->hasMany(\App\Models\Ruang::class);

    }
    public function kampus()
    {

        return $this->belongsTo(\App\Models\Kampus::class,'k_id','k_id');

    }
}
