<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Reward as Model;

class Reward extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'points',
        'status',
        'code_data',
    ];
}
