<?php

namespace Modules\FeedbackModule\Services;

use App\Helpers\UploaderHelper;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Modules\FeedbackModule\Repository\FeedbackRepository;

class FeedbackService
{
    use UploaderHelper;

    private $feedbackRepository;

    public function __construct(FeedbackRepository $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }
    public function findWhere($arr)
    {
        return $this->feedbackRepository->findWhere($arr);
    }
    public function findAll()
    {
        return $this->feedbackRepository->all();
    }

    public function findWithFilter($request)
    {
        return $this->feedbackRepository->findWithFilter($request);
    }
    public function findOne($id)
    {

        // dd($id);
        return $this->feedbackRepository->find($id);
    }

   
    public function login($data)
    {
        $user = $this->feedbackRepository->findWhere(
            [
                'phone' => $data['phone'],
            ]
        )->first();

        if (!$user) {
            return null;
        }

        if (key_exists('push_token', $data)) {
            $this->feedbackRepository->updatePushToken($user, $data['push_token']);
            $user->push_token = $data['push_token'];
        }
        $user->token = $user->createToken('token')->accessToken;
        ///////////////////////////
        // dd($user);
        return $user;
    }

       public function create($feedback_data)
    {
    
// dd($user_data);
        return $this->feedbackRepository->create($feedback_data);
    }

  

  
}
