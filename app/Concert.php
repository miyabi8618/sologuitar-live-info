<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = [
        'user_id','title', 'place', 'venue', 'date', 'content', 'web',
    ];
    
    //Userとの繋がりを記述
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //お気に入りコンサートとユーザーIDを繋げる
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorite_concert', 'concert_id', 'user_id')->withTimestamps();
    }
}
