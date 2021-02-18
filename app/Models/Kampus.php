<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{

    protected $table = 'kampus';
    protected $primaryKey = 'k_id';
    public $incrementing = true;
    protected $fillable = [
        'k_nama'
       ,'k_lokasi'
    ];
    public function gedung()
    {

        return $this->hasMany(\App\Models\Gedung::class);

    }
    public function user()
    {

        return $this->belongsTo(\App\Models\User::class,'email','email');

    }
}
