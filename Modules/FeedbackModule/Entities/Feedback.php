<?php

namespace Modules\FeedbackModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserModule\Entities\User;

class Feedback extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function status()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
