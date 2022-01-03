<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim_Valorant extends Model
{
    use HasFactory;

    protected $table = "tim_valorant";
    protected $guarded = [];
    public $timestamps = false;

    public function players()
    {
        return $this->hasMany('App\Models\Valorant', 'id_tim', 'id');
    }
}
