<?php

namespace Modules\UserModule\Services;

use App\Helpers\UploaderHelper;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Modules\UserModule\Repository\UserRepository;

class UserService
{
    use UploaderHelper;

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function findWhere($arr)
    {
        return $this->userRepository->findWhere($arr);
    }
    public function findAll()
    {
        return $this->userRepository->all();
    }

    public function findWithFilter($request)
    {
        return $this->userRepository->findWithFilter($request);
    }
    public function findOne($id)
    {
        return $this->userRepository->find($id);
    }

   
    public function login($data)
    {
        $user = $this->userRepository->findWhere(
            [
                'phone' => $data['phone'],
            ]
        )->first();

        if (!$user) {
            return null;
        }

        if (key_exists('push_token', $data)) {
            $this->userRepository->updatePushToken($user, $data['push_token']);
            $user->push_token = $data['push_token'];
        }
        $user->token = $user->createToken('token')->accessToken;
        ///////////////////////////
        // dd($user);
        return $user;
    }

       public function create($user_data)
    {
        if (key_exists('profile_image', $user_data) && $user_data['profile_image'] != null) {
            $img_name = $this->uploadImage($user_data['profile_image'], 'users', 'user');
            $user_data['profile_image'] = $img_name;
        }
        // dd($user_data)->toArray();
        $user_data['password'] = bcrypt($user_data['password']);
    

        return $this->userRepository->create($user_data);
    }

  

  
}
