<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\UserReward as Model;

class UserReward extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'reward_id',
        'points',
    ];


    protected $table = 'user_rewards';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }
}
