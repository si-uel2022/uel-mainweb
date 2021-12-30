<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ML extends Model
{
    use HasFactory;

    protected $table = "ml";
    protected $guarded = [];

    public function tim()
    {
        return $this->belongsTo('App\Models\TIM_ML', 'id_tim', 'id');
    }

    public $timestamps = false;
}
