<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Valorant extends Model
{
    use HasFactory;

    protected $table = "riwayat_valorant";
    protected $guarded = [];
    public $timestamps = false;

    public function players()
    {
        return $this->belongsTo('App\Models\Valorant', 'id_player', 'id');
    }
}
