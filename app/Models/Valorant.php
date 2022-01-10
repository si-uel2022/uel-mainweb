<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valorant extends Model
{
    use HasFactory;

    protected $table = "valorant";
    protected $guarded = [];
    public $timestamps = false;

    public function tim()
    {
        return $this->belongsTo('App\Models\TIM_Valorant', 'id_tim', 'id');
    }

    public function fakultas()
    {
        return $this->belongsTo('App\Models\Fakultas', 'id_fakultas', 'id');
    }

    public function riwayat()
    {
        return $this->hasMany('App\Models\Riwayat_Valorant', 'id_player', 'id');
    }
}
