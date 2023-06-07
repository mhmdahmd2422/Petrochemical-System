<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){
        $data = category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request){
        $data = new category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Has Been Added Successfully!');
    }

    public function delete_category($id){
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Has Been Deleted Successfully!');
    }

    public function view_product(){
        $category = category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request){
        $data = new product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->discount_price = $request->discount;
        $data->category = $request->category;
        $image = $request->image;
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $image_name);
        $data->image = $image_name;
        $data->save();
        return redirect()->back()->with('message', 'Product Has Been Added Successfully!');
    }

    public function show_product(){
        $data = product::all();
        return view('admin.show_product', compact('data'));
    }

    public function delete_product($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Has Been Deleted Successfully!');
    }

    public function edit_product($id)
    {
        $product = product::find($id);
        $category = category::all();
        return view('admin.edit_product' ,compact('product', 'category'));
    }

    public function edit_product_confirm($id, Request $request){
        $data = product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->discount_price = $request->discount;
        $data->category = $request->category;
        if($request->image) {
            $image = $request->image;
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect('/show_product')->with('message', 'Product Has Been Edited Successfully!');
    }
}
