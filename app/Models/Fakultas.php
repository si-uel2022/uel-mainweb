<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = "fakultas";

    public function players()
    {
        return $this->hasMany('App\Models\ML', 'id_fakultas', 'id');
    }
}
