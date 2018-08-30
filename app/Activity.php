<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Connection;
use App\User;
use App\Lesson;

class Activity extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getFollowingUser()
    {
    	$userId = Connection::find($this->reference_id)->following_id;
    	$user = User::find($userId);

    	return $user;
    }

    public function getLesson()
    {
    	$lesson = Lesson::find($this->reference_id);

    	return $lesson;
    }
}
