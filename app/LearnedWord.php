<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class LearnedWord extends Model
{
    //

    public function lesson()
    {
    	return $this->belongsTo(Lesson::class);
    }

    public function isCorrect()
    {
    	$returnValue = false;

    	$item = Item::find($this->item_id);
    	$correctAnswer = $item->getCorrectWord();
    	if(strcmp($this->user_answer, $correctAnswer) == 0) {
    		$returnValue = true;
    	}

    	return $returnValue;
    }

    public function getItemWord() {
        $word = Item::find($this->item_id)->word;

        return $word;
    }

    public function getCorrectWord() {
        $word = Item::find($this->item_id)->getCorrectWord();

        return $word;
    }
}
