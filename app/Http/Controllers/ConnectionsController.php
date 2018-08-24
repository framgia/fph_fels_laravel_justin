<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Connection;
use App\Activity;
use Auth;

class ConnectionsController extends Controller
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
    public function followUser($id)
    {
        //
        $connection = new Connection;
        $connection->user_id = Auth::user()->id;
        $connection->following_id = $id;
        $connection->save();

        $activity = new Activity;
        $activity->user_id = $connection->user_id;
        $activity->type = 0;
        $activity->reference_id = $connection->id;
        $activity->save();

        return redirect()->back();
    }

    public function unfollowUser($id)
    {
        //
        $connection = Connection::where('user_id', Auth::user()->id)->where('following_id', $id)->first();
        $activities = Activity::where('user_id', Auth::user()->id)->where('type', 0)->where('reference_id', $connection->id)->first();


        $connection->delete();
        $activities->delete();

        return redirect()->back();
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
