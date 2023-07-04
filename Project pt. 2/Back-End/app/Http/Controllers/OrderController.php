<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Storage;
use App\Models\Transport;
use App\Models\Type;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function view_type(){
        if(Auth::user()->usertype == 1) {
            $data = Type::all();
            return view('admin.category', compact('data'));
        } else{
            return view('auth.login');
        }
    }

    public function add_type(Request $request){
        if(Auth::user()->usertype == 1) {
            $data = new Type;
            $data->name = $request->category;
            $data->true_price = $request->price;
            $data->save();
            return redirect()->back()->with('message', 'New Type Has Been Added Successfully!');
        }else{
            return view('auth.login');
        }
    }

    public function delete_type($id){
        if(Auth::user()->usertype == 1) {
            $data = Type::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'Type Has Been Deleted Successfully!');
        }else{
            return view('auth.login');
        }
    }

    public function view_vendor(){
        if(Auth::user()->usertype == 1) {
            $data = Vendor::all();
            return view('admin.vendor', compact('data'));
        } else{
            return view('auth.login');
        }
    }

    public function add_vendor(Request $request){
        if(Auth::user()->usertype == 1) {
            $data = new Vendor;
            $data->name = $request->vendor;
            $data->dis_hq = $request->dis_hq;
            $data->type_id = $request->type;
            $data->price = $request->type_price;
            $data->save();
            return redirect()->back()->with('message', 'New Type Has Been Added Successfully!');
        }else{
            return view('auth.login');
        }
    }

    public function delete_vendor($id){
        if(Auth::user()->usertype == 1) {
            $data = Vendor::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'Type Has Been Deleted Successfully!');
        } else{
            return view('auth.login');
        }
    }

    public function view_product(){
        if(Auth::user()->usertype == 1) {
            $data = Product::all();
            return view('admin.product', compact('data'));
        } else{
            return view('auth.login');
        }
    }

    public function add_product(Request $request){
        if(Auth::user()->usertype == 1) {
        $data = new Product;
        $data->name = $request->product;
        $data->true_price = $request->price;
        $data->save();
        return redirect()->back()->with('message', 'New Product Has Been Added Successfully!');
        }else {
            return view('auth.login');
        }
    }

    public function delete_product($id){
        if(Auth::user()->usertype == 1) {
            $data = Product::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'Product Has Been Deleted Successfully!');
        }else{
            return view('auth.login');
        }
    }

    public function view_manufacturer(){
        if(Auth::user()->usertype == 1) {
            $data = Manufacturer::all();
            return view('admin.manufacturer', compact('data'));
        } else{
            return view('auth.login');
        }
    }

    public function add_manufacturer(Request $request){
        if(Auth::user()->usertype == 1) {
            $data = new Manufacturer;
            $data->name = $request->manufacturer;
            $data->dis_hq = $request->dis_hq;
            $data->product = $request->product;
            $data->price = $request->product_price;
            $data->save();
            return redirect()->back()->with('message', 'New Manufacturer Has Been Added Successfully!');
        } else{
            return view('auth.login');
        }
    }

    public function delete_manufacturer($id){
        if(Auth::user()->usertype == 1) {
            $data = Manufacturer::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'Manufacturer Has Been Deleted Successfully!');
        } else{
            return view('auth.login');
        }
    }

    public function view_storage(){
        if(Auth::user()->usertype == 1) {
            $data = Storage::all();
            return view('admin.storage', compact('data'));
        } else{
            return view('auth.login');
        }
    }

    public function add_storage(Request $request){
        if(Auth::user()->usertype == 1) {
            $data = new Storage;
            $data->name = $request->storage;
            $data->price = $request->price;
            $data->location = $request->location;
            $data->save();
            return redirect()->back()->with('message', 'New Storage Unit Has Been Added Successfully!');
        } else{
            return view('auth.login');
        }
    }

    public function delete_storage($id){
        if(Auth::user()->usertype == 1) {
            $data = Storage::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'Storage Unit Has Been Deleted Successfully!');
        } else{
            return view('auth.login');
        }
    }

    public function view_transport(){
        if(Auth::user()->usertype == 1) {
            $data = Transport::all();
            return view('admin.transport', compact('data'));
        } else{
            return view('auth.login');
        }
    }

    public function add_transport(Request $request){
        if(Auth::user()->usertype == 1) {
            $data = new Transport;
            $data->name = $request->transport;
            $data->price = $request->price;
            $data->save();
            return redirect()->back()->with('message', 'New Transport Method Has Been Added Successfully!');
        }else{
            return view('auth.login');
        }
    }

    public function delete_transport($id){
        if(Auth::user()->usertype == 1) {
            $data = Transport::find($id);
            $data->delete();
            return redirect()->back()->with('message', 'Transport Method Has Been Deleted Successfully!');
        }else{
            return view('auth.login');
        }
    }
}
