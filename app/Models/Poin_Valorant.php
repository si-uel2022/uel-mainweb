<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin_Valorant extends Model
{
    use HasFactory;

    protected $table = "poin_valorant";
    protected $guarded = [];

    public $timestamps = false;
}
