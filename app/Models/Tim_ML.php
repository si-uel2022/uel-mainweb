<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim_ML extends Model
{
    use HasFactory;

    protected $table = "tim_ml";
    protected $guarded = [];
    public $timestamps = false;

    public function players()
    {
        return $this->hasMany('App\Models\ML', 'id_tim', 'id');
    }
}
