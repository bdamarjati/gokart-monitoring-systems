<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lap extends Model
{
    use HasFactory;
    protected $table = 'lap_count';
    protected $guarded = [];
}
