<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

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
}
