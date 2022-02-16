<?php

namespace Modules\UserModule\Repository;

use Illuminate\Support\Facades\DB;
use Modules\UserModule\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{

    public function model()
    {
        return User::class;
    }

   
}
