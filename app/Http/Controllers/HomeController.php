<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function getWordsLearnedCount($lessons) 
    {
        $learnedWordsCount = 0;
        foreach($lessons as $lesson) {
            $learnedWordsCount += count($lesson->learnedWords);
        }

        return $learnedWordsCount;
    }

    public function index()
    {
        $user = Auth::user();
        $lessons = $user->lessons;
        
        $lessonsCount = count($lessons);
        $learnedWordsCount = $this->getWordsLearnedCount($lessons);
        
        return view('users.dashboard', compact('user', 'lessonsCount', 'learnedWordsCount'));
    }
}
