<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;


    // Notif.php
    public function scopeType($query, $type)
    {
        if ($type === 'Comment') {
            return $query->whereIn('type', ['Comment', 'Reply']);
        } elseif ($type === 'Like') {
            return $query->whereIn('type', ['LikePost', 'LikeComment']);
        }

        return $query; // Default: Show all
    }

    public function notifable()
    {

        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'notifable_id');
    }
    public function like()
    {
        return $this->belongsTo(Like::class, 'notifable_id');
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'notifable_id');
    }
    public function reply()
    {
        return $this->belongsTo(Reply::class, 'notifable_id');
    }
}
