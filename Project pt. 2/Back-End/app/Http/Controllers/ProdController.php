<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\ProdOrder;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdController extends Controller
{
    public function index()
    {
        $data['products'] = Product::get(["name", "id", "true_price"]);
        return view('user.production_container', $data);
    }

    public function fetchProducts(Request $request)
    {
        $data['manufacturers'] = Manufacturer::where("product", $request->product)
            ->get(["name", "id", "price"]);

        return response()->json($data);
    }
    public function fetchPrice(Request $request)
    {
        $data['manufacturer'] = Manufacturer::where("id", $request->manufacturer)
            ->get(["price"]);

        return response()->json($data);
    }

    public function add_prod_data(Request $request){
        if(Auth::id()) {
            $user = Auth::user();
            $order = new ProdOrder;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $product = Product::find($request->product);
            $order->product_name = $product->name;
            $order->quantity = $request->quantity;
            $order->price = $request->total_price;
            $order->manufacturer_id = $request->manufacturer;
            $manufacturer = Manufacturer::find($request->manufacturer);
            $order->manufacturer_name = $manufacturer->name;
            $order->user_id = $user->id;
            $order->user_name = $user->name;
            $order->save();
        }else{
            return view('auth.login');
        }
        return redirect('storage_order');
    }
}
