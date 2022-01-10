<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_PUBG extends Model
{
    use HasFactory;

    protected $table = "riwayat_pubg";
    protected $guarded = [];
    public $timestamps = false;

    public function players()
    {
        return $this->belongsTo('App\Models\PUBG', 'id_player', 'id');
    }
}
