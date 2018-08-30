<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Option;
use App\LearnedWord;

class Item extends Model
{
    //
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function getCorrectWord() {
    	$word = $this->options()->where('is_correct', 1)->first()->word;

    	return $word;
    }

    public function deleteOptions()
    {
        Option::where('item_id', $this->id)->delete();
    }

    public function getCorrectWordId() {
        $id = $this->options()->where('is_correct', 1)->first()->id;

        return $id;
    }

    public function deleteLearnedWords()
    {
        $learnedWords = LearnedWord::where('item_id', $this->id)->delete();
    }
}
