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



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
