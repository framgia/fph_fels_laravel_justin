<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

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
    	return view('admin.listItem', compact('id'));
    }

    public function createItem($id)
    {
        return view('admin.createItem', compact('id'));
    }

    public function editItem($id)
    {
        return view('admin.editItem');
    }

    public function displayOptions($id)
    {
    	return view('admin.listOption', compact('id'));
    }

    public function createOption($id)
    {
        return view('admin.createOption', compact('id'));
    }

    public function editOption($id)
    {
        return view('admin.editOption');
    }
}
