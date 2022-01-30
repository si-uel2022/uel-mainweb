<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin_ML extends Model
{
    use HasFactory;

    protected $table = "poin_ml";
    protected $guarded = [];

    public $timestamps = false;
}
