<?php

namespace Modules\UserModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends  Authenticatable

{
    protected $guarded = [];

    public function getImageFullPathAttribute()
    {
        if ($this->attributes['profile_image']) {
            return asset('/uploads/users/' . $this->attributes['profile_image']);
        } else {
            return asset('theme/img/logo.png');

                //  return asset('theme/img/no_img.jpg');
        }
    }

}
