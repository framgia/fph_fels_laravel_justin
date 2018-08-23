<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function learnedWords()
    {
        return $this->hasMany(LearnedWord::class);
    }
}
