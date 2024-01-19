<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    public $fillable = [
        'following_id',
        'user_id'
    ];

    public function follower()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function following()
    {
        return $this->belongsTo(User::class, 'following_id');
    }

    public function notif()
    {
        return $this->morphMany(Notif::class, 'notifable');
    }
}
