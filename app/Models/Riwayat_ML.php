<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_ML extends Model
{
    use HasFactory;

    protected $table = "riwayat_ml";
    protected $guarded = [];
    public $timestamps = false;

    public function players()
    {
        return $this->belongsTo('App\Models\ML', 'id_player', 'id');
    }
}
