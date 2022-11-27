<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category() {
        $all_category_data = Category::all();
        return view('admin.category', compact('all_category_data'));
    }

    public function add_category(Request $request) {
        $category = new Category;
        $category->category_name = $request->category;

        $category->save();
        return redirect()->back()->with('message', 'Category added successfully');
    }

    public function delete_category($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('message', 'Category deleted successfully');
    }
}
