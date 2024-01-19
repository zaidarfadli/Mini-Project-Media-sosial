<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'username',
        'bio',
        'image',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function post()
    {

        return $this->hasMany(Post::class);
    }


    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function like()
    {

        return $this->hasMany(Like::class);
    }

    public function bookmarks()
    {
        return $this->belongsToMany(Post::class, 'bookmarks', 'user_id', 'post_id');
    }



    public function followings()
    {
        return $this->hasMany(Follow::class, 'user_id');
    }

    public function followers()
    {
        return $this->hasMany(Follow::class, 'following_id');
    }


    public function notif()
    {

        return $this->hasMany(Notif::class);
    }



    public function getIsMeAttribute()
    {
        $user = Auth::user();
        return $this->id === $user->id;
    }

    public function isLikedByUser()
    {
        $user = Auth::user();

        if ($user) {
            return $this->like()->where('user_id', $user->id)->exists();
        }

        return false;
    }

    // Model User
    public function getIsFollowAttribute()
    {
        $user = Auth::user();
        return $user ? $this->followers()->where('user_id', $user->id)->exists() : false;
    }

    public function postCount()
    {
        return $this->post()->count();
    }


    public function followingCount()
    {
        return $this->followings()->count();
    }

    public function followerCount()
    {
        return $this->followers()->count();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
