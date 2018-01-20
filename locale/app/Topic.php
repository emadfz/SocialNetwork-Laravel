<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = "topic";
    protected $fillable = [
        'title', 'content', 'media_url','media_type','post_type','status', "lat", "long", "value", "user_id", "city", "thumbnail"
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
