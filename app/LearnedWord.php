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

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function isCorrect()
    {
        $returnValue = false;

        $correctAnswer = $this->item->options()->where('is_correct', 1)->get();
        if(strcmp($this->user_answer, $correctAnswer[0]->word) == 0) {
            $returnValue = true;
        }

        return $returnValue;
    }

    public function isCorrect()
    {
    	$returnValue = false;

    	$item = Item::find($this->item_id);
    	$correctAnswer = $item->options()->where('is_correct', 1)->get();
    	if(strcmp($this->user_answer, $correctAnswer[0]->word) == 0) {
    		$returnValue = true;
    	}

    	return $returnValue;
    }

    public function isCorrect()
    {
    	$returnValue = false;

    	$item = Item::find($this->item_id);
    	$correctAnswer = $item->options()->where('is_correct', 1)->get();
    	if(strcmp($this->user_answer, $correctAnswer[0]->word) == 0) {
    		$returnValue = true;
    	}

    	return $returnValue;
    }

    public function isCorrect()
    {
    	$returnValue = false;

    	$item = Item::find($this->item_id);
    	$correctAnswer = $item->options()->where('is_correct', 1)->get();
    	if(strcmp($this->user_answer, $correctAnswer[0]->word) == 0) {
    		$returnValue = true;
    	}

    	return $returnValue;
    }
}
