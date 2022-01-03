<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim_PUBG extends Model
{
    use HasFactory;

    protected $table = "tim_pubg";
    protected $guarded = [];
    public $timestamps = false;

    public function players()
    {
        return $this->hasMany('App\Models\PUBG', 'id_tim', 'id');
    }
}
