<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImageNormal(){
        return '/storage/'. ($this->orginalImage ? $this->orginalImage : 'profile/def.png');
    }

    public function profileImageResize(){
        return '/storage/'. ($this->image ? $this->image : 'profile/resDef.png');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
