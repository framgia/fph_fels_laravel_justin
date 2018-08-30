<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Option;

class DataManagementController extends Controller
{
    //
    public function index()
    {
        $categories = Category::paginate(4);

    	return view('admin.listCategory', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.createCategory');
    }

    public function editCategory($id)
    {
        $category = Category::find($id);

        return view('admin.editCategory', compact('category'));
    }

    public function displayItems($id)
    {
        $items = Item::where('category_id', $id)->paginate(4);

    	return view('admin.listItem', compact('id', 'items'));
    }

    public function createItem($id)
    {
        return view('admin.createItem', compact('id'));
    }

    public function editItem($id)
    {
        $item = Item::find($id);

        return view('admin.editItem', compact('item'));
    }

    public function displayOptions($id)
    {
        $options = Option::where('item_id', $id)->get();

    	return view('admin.listOption', compact('id', 'options'));
    }

    public function createOption($id)
    {
        return view('admin.createOption', compact('id'));
    }

    public function editOption($id)
    {
        $option = Option::find($id);
        
        return view('admin.editOption', compact('option'));
    }
}
