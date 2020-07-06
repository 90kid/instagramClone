<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function postImageNormal()
    {
        return '/storage/' . ($this->orginalImage ? $this->orginalImage : 'profile/def.png');
    }

    public function postImageResize()
    {
        return '/storage/' . ($this->image ? $this->image : 'profile/resDef.png');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
