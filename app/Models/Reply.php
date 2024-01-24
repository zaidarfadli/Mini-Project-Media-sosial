<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Reply extends Model
{
    use HasFactory;


    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'post_id',
        'comment_id',
        'reply'

    ];


    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function notif()
    {

        return $this->morphMany(Follow::class, 'notifable');
    }

    public function getMyReplyAttribute()
    {
        $user = Auth::user();
        return $user ? $this->user_id == $user->id : false;
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
