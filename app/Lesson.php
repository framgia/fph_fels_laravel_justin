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

    public function learnedWordsCount() 
    {
        return count($this->learnedWords);
    }

    public function correctLearnedWordsCount() 
    {
        $correctLearnedWordsCount = 0;
        foreach($this->learnedWords as $learnedWord) {
            if($learnedWord->isCorrect()) {
                $correctLearnedWordsCount++;
            }
        }

        return $correctLearnedWordsCount;
    }
}
