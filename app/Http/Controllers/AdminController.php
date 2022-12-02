<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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

    public function view_product() {
        $category = Category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'required|numeric',
            'quantity' => 'required',
            'image' => 'required',
        ]);
        
        $image = $request->file('image');
        // dd($image);
        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('product', $image_name);

        Product::insert([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'discount_price' => $request->discount_price,
            'image' => $image_name,
            'category' => $request->category,
        ]);
        
        return redirect()->back()->with('message', 'Product added successfully');
        
    }
}
