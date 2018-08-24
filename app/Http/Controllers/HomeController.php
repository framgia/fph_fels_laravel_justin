<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Activity;

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

    public function index()
    {
        $user = Auth::user();

        $connections = array_map('end', $user->connections()->select('following_id')->get()->toArray());
        array_push($connections, $user->id);

        $activities = Activity::orderBy('updated_at', 'desc')->whereIn('user_id', $connections)->paginate(4);

        
        return view('users.dashboard', compact('user', 'activities'));
    }
}
