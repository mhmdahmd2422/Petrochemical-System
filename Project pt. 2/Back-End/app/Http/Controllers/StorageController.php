<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

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
}
