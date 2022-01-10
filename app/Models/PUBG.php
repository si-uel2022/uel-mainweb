<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PUBG extends Model
{
    use HasFactory;

    protected $table = "pubg";
    protected $guarded = [];
    public $timestamps = false;

    public function tim()
    {
        return $this->belongsTo('App\Models\TIM_PUBG', 'id_tim', 'id');
    }

    public function fakultas()
    {
        return $this->belongsTo('App\Models\Fakultas', 'id_fakultas', 'id');
    }

    public function riwayat()
    {
        return $this->hasMany('App\Models\Riwayat_PUBG', 'id_player', 'id');
    }
}
