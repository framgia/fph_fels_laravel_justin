<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
