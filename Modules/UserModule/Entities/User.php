<?php

namespace Modules\UserModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends  Authenticatable

{
    protected $guarded = [];

   

}
