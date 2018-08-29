<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\Lesson;

class Category extends Model
{
    //
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function lessons()
    {
    	return $this->hasMany(Lesson::class);
    }

    public function isReady()
    {
    	return $this->status;
    }

    public function deleteItems()
    {
    	Item::where('category_id', $this->id)->delete();
    }

    public function deleteLessons()
    {
    	Lesson::where('category_id', $this->id)->delete();
    }
}
