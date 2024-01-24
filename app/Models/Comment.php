<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'post_id',
        'comment'

    ];

    public function like()
    {

        return $this->morphMany(Like::class, 'likeable');
    }






    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }



    public function notif()
    {
        return $this->morphMany(Notif::class, 'notifable');
    }

    public function isLikedCommentByUser()
    {
        $user = Auth::user();

        if ($user) {
            return $this->like()->where('user_id', $user->id)->where('likeable_type', 'App\Models\Comment')->exists();
        }

        return false;
    }

    public function getMyCommentAttribute()
    {

        $user = Auth::user();

        return $user ? $this->user_id == $user->id : false;
    }

    public function getLikesCountAttribute()
    {
        return $this->like()->count();
    }



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
