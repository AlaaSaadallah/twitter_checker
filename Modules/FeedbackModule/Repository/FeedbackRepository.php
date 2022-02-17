<?php

namespace Modules\FeedbackModule\Repository;

use Illuminate\Support\Facades\DB;
use Modules\FeedbackModule\Entities\Feedback;

use Prettus\Repository\Eloquent\BaseRepository;

class FeedbackRepository extends BaseRepository
{

    public function model()
    {
        return Feedback::class;
    }

   
}
