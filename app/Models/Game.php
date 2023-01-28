<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'genre', 'platform', 'release_date'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'game_users')->withPivot('play_time');
    }

    // public function toJson($options = 0)
    // {
    //     return json_encode([
    //         'name' => $this->name,
    //     ]);
    // }
    public function uniquePlayers()
    {
        return $this->belongsToMany(
            User::class,
            'game_users'
        )
            ->selectRaw('game_id, count(distinct user_id) as unique_players')
            ->groupBy('game_id', 'game_users.user_id');
    }
}