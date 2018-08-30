<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;

class OptionsController extends Controller
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
        $option = new Option;
        $option->item_id = $id;
        $option->word = $request->optionWord;
        $option->is_correct = 0;
        $option->save();
        
        return redirect('/admin/item/'.$id);
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
        $option = Option::find($id);
        $option->word = $request->optionWord;
        $option->save();

        return redirect('/admin/item/'.$option->item_id);
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
        $option = Option::find($id);
        $itemId = $option->item_id;
        $categoryId = $option->item->category_id;
        $location = "/admin";

        if($option->is_correct) {
            $item = $option->item;
            $item->deleteOptions();
            $item->delete();
            $location .= "/category/".$categoryId;
        }else {
            $option->delete();
            $location .= "/item/".$itemId;
        }

        return redirect($location);
    }
}
