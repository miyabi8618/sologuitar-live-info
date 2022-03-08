<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
     'email', 'password', 'name', 'address', 'birthday', 'introduction','web', 'artist',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //Concertとの繋がりを記述
    public function concerts()
    {
        return $this->hasMany(Concert::class);
    }
    
    //ユーザーがユーザーをフォローする関係性(命名規則に従っていない)
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }
   
    
    //ユーザーがユーザーをフォロー
    public function follow($userId)
    {
        // すでにフォローしているか
        $exist = $this->is_following($userId);
        // 対象が自分自身かどうか
        $its_me = $this->id == $userId;
        
        if($exist || $its_me){
            return false;
        }else{
            //それ以外はフォロー
            $this->followings()->attach($userId);
            return true;
        }
    }
    
    public function unfollow($userId){
        // すでにフォローしているか
        $exist = $this->is_following($userId);
        // 対象が自分自身かどうか
        $its_me = $this->id == $userId;
        
        if ($exist && !$its_me) {
            // フォロー済み、かつ、自分自身でない場合はフォローを外す
            $this->followings()->detach($userId);
            return true;
        } else {
            // 上記以外の場合は何もしない
            return false;
        }
    }
    
     public function is_following($userId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->followings()->where('follow_id', $userId)->exists();
    }
    
    
     
    //ユーザーがコンサートをお気に入りする関係性（命名規則に従っているので省略して記述）
    public function favorites()
    {
        return $this->belongsToMany(Concert::class, 'favorite_concert', 'user_id', 'concert_id')->withTimestamps();
    }
    
     //ユーザーがコンサートをお気に入り
    public function favorite($concertId)
    {
        // すでにお気に入りしているか
        $exist = $this->is_favorite($concertId);
        // 対象が自分自身かどうか
        $its_me = $this->id == $concertId;
        
        if($exist || $its_me){
            return false;
        }else{
            //それ以外はフォロー
            $this->favorites()->attach($concertId);
            return true;
        }
    }
    
    public function unfavorite($concertId){
        // すでにお気に入りしているか
        $exist = $this->is_favorite($concertId);
        // 対象が自分自身かどうか
        $its_me = $this->id == $concertId;
        
        if ($exist && !$its_me) {
            // お気に入り済み、かつ、自分自身でない場合はフォローを外す
            $this->favorites()->detach($concertId);
            return true;
        } else {
            // 上記以外の場合は何もしない
            return false;
        }
    }
    
     public function is_favorite($concertId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->favorites()->where('concert_id', $concertId)->exists();
    }
    
    
    
}
