<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Vendor;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view_type(){
        $data = Type::all();
        return view('admin.category', compact('data'));
    }

    public function add_type(Request $request){
        $data = new Type;
        $data->name = $request->category;
        $data->true_price = $request->price;
        $data->save();
        return redirect()->back()->with('message', 'New Type Has Been Added Successfully!');
    }

    public function delete_type($id){
        $data = Type::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Type Has Been Deleted Successfully!');
    }

    public function view_vendor(){
        $data = Vendor::all();
        return view('admin.vendor', compact('data'));
    }

    public function add_vendor(Request $request){
        $data = new Vendor;
        $data->name = $request->vendor;
        $data->dis_hq = $request->dis_hq;
        $data->type_id = $request->type;
        $data->price = $request->type_price;
        $data->save();
        return redirect()->back()->with('message', 'New Type Has Been Added Successfully!');
    }

    public function delete_vendor($id){
        $data = Vendor::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Type Has Been Deleted Successfully!');
    }
}
