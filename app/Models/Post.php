<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;


    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'content',
        'image'

    ];

    public function like()
    {

        return $this->morphMany(Like::class, 'likeable');
    }


    public function user()
    {

        return $this->belongsTo(User::class);
    }


    public function comment()
    {
        return $this->hasMany(Comment::class);
    }


    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }







    public function isBookmarkedByUser()
    {
        $user = Auth::user();

        if ($user) {
            return $this->bookmarks()->where('user_id', $user->id)->exists();
        }

        return false;
    }

    public function isLikedByUser()
    {
        $user = Auth::user();

        if ($user) {
            return $this->like()->where('user_id', $user->id)->where('likeable_type', 'App\Models\Post')->exists();
        }

        return false;
    }

    public function getMyPostAttribute()
    {
        $user = Auth::user();
        return $user ? $this->user_id == $user->id : false;
    }


    public function getLikesCountAttribute()
    {
        return $this->like()->count();
    }


    public function getCommentsCountAttribute()
    {
        return $this->comment()->count();
    }





    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
