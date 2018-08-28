<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Lesson;
use App\Activity;
use App\LearnedWord;
use App\User;
use Auth;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(Auth::user()->lessons()->where('category_id', $request->categoryId)->first() == null) {
            $lesson = new Lesson;
            $lesson->category_id = $request->categoryId;
            $lesson->user_id = Auth::user()->id;
            $lesson->save();

            $category = Category::find($request->categoryId);
            foreach($category->items as $item) {
                $learnedWord = new LearnedWord;
                $learnedWord->lesson_id = $lesson->id;
                $learnedWord->item_id = $item->id;
                $learnedWord->user_answer = $request->get($item->word);
                $learnedWord->save();
            }

            $activity = new Activity;
            $activity->user_id = Auth::user()->id;
            $activity->type = 1;
            $activity->reference_id = $lesson->id;
            $activity->save();
        }else {
            return redirect('/');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function startQuiz($id)
    {
        if(Category::find($id) != null && Auth::user()->lessons()->where('category_id', $id)->first() == null) {
            $category = Category::find($id);

            return view('lessons.quiz', compact('category'));
        }else {
            return redirect('/');
        }
    }

    public function showResults($user_id, $category_id)
    {
        $lesson = User::find($user_id)->lessons()->where('category_id', $category_id)->first();
        if(Category::find($category_id) == null || $lesson == null) {
            return redirect('/');
        }else {
            return view('lessons.result', compact('lesson'));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
