<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

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
        return $this->learnedWords->count();
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

    public function getCategoryTitle()
    {
        $category = Category::where('id', $this->category_id)->first();

        return $category->title;
    }
}
