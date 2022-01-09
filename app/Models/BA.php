<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BA extends Model
{
    use HasFactory;

    protected $table = "brand_ambassador";
    protected $guarded = [];
    public $timestamps = false;
}
