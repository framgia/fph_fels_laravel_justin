<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Option;

class ItemsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        //
        $item = new Item;
        $item->category_id = $id;
        $item->word = $request->itemWord;
        $item->save();

        $correctAnswer = new Option;
        $correctAnswer->item_id = $item->id;
        $correctAnswer->word = $request->correctAnswer;
        $correctAnswer->is_correct = 1;
        $correctAnswer->save();

        return redirect('admin/category/'.$id);
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
    public function edit($id, Request $request)
    {
        //
        $item = Item::find($id);
        $item->word = $request->itemWord;
        $item->save();

        $correctAnswer = Option::find($item->getCorrectWordId());
        $correctAnswer->word = $request->correctAnswer;
        $correctAnswer->save();

        return redirect('admin/category/'.$item->category_id);
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
        $item = Item::find($id);
        $categoryId = $item->category_id;
        $options = $item->options()->delete();
        $item->delete();

        return redirect('admin/category/'.$categoryId);
    }
}
