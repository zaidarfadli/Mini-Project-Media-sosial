<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Like extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'likeable_id',
        'likeable_type'

    ];


    public function likeable()
    {
        return $this->morphTo();
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'likeable_id');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'likeable_id');
    }
    
    public function notif()
    {
        return $this->morphMany(Notif::class, 'notifable');
    }
}
