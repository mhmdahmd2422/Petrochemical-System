<?php

namespace App\Http\Controllers;

use App\Models\RawOrder;
use App\Models\Storage;
use App\Models\StorageOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorageController extends Controller
{
    public function index()
    {
        $data['storages'] = Storage::get(["name", "id"]);
        return view('user.storage_container', $data);
    }

    public function fetchPrice(Request $request)
    {
        $data['storage'] = Storage::where("id", $request->storage_id)
            ->get(["price"]);

        return response()->json($data);
    }

    public function fetchloc(Request $request)
    {
        $data['storage_loc'] = Storage::where("id", $request->storage_id)
            ->get(["location"]);

        return response()->json($data);
    }

    public function fetchquantity(Request $request)
    {
        $data['storage_quantity'] = RawOrder::orderBy('id', 'asc')->first()->get(["quantity"]);

        return response()->json($data);
    }

    public function add_storage_data(Request $request){
        if(Auth::id()) {
            $user = Auth::user();
            $order = new StorageOrder;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $storage = Storage::find($request->storage);
            $order->storage_method = $storage->name;
            $order->quantity = $request->quantity;
            $quan = $request->quantity;
            $price = $request->price;
            $order->total_price = $quan*$price;
            $order->user_id = $user->id;
            $order->user_name = $user->name;
            $order->save();
        }else{
            return view('auth.login');
        }
        return redirect('trans_order');
    }
}
