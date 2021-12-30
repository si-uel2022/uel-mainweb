<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PUBG extends Model
{
    use HasFactory;

    protected $table = "pubg";
    protected $guarded = [];
    public $timestamps = false;
}
