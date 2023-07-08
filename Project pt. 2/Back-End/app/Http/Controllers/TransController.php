<?php

namespace App\Http\Controllers;

use App\Models\TransOrder;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransController extends Controller
{
    public function index()
    {
        $data['transport'] = Transport::get(["name", "id", "price"]);
        return view('user.trans_container', $data);
    }

    public function fetchPrice(Request $request)
    {
        $data['transportation'] = Transport::where("id", $request->method_id)
            ->get(["price"]);

        return response()->json($data);
    }

    public function add_trans_data(Request $request)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $order = new TransOrder;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $transport = Transport::find($request->transport);
            $order->trans_method = $transport->name;
            $order->quantity = $request->quantity;
            $quan = $request->quantity;
            $price = $request->price;
            $order->total_price = $quan * $price;
            $order->user_id = $user->id;
            $order->user_name = $user->name;
            $order->save();
        } else {
            return view('auth.login');
        }
        return redirect('payment');
    }
}
