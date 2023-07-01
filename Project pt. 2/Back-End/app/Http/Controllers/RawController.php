<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\RawOrder;
use App\Models\Type;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RawController extends Controller
{
    public function index()
    {
        $data['types'] = Type::get(["name", "id", "true_price"]);
        return view('user.raw_container', $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchState(Request $request)
    {
        $data['vendors'] = Vendor::where("type_id", $request->type_id)
            ->get(["name", "id", "price"]);

        return response()->json($data);
    }
    public function fetchPrice(Request $request)
    {
        $data['vendor'] = Vendor::where("id", $request->vendor)
            ->get(["price"]);

        return response()->json($data);
    }

    public function add_raw_data(Request $request){
        if(Auth::id()) {
            $user = Auth::user();
            $order = new RawOrder;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $type = Type::find($request->type);
            $order->type_name = $type->name;
            $order->quantity = $request->quantity;
            $order->price = $request->total_price;
            $order->vendor_id = $request->vendor;
            $vendor = Vendor::find($request->vendor);
            $order->vendor_name = $vendor->name;
            $order->user_id = $user->id;
            $order->user_name = $user->name;
            $order->save();
        }else{
            return view('auth.login');
        }
        return redirect('prod_order');
    }
}
