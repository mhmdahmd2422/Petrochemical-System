<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function index()
    {
        $data['types'] = Type::get(["name", "id", "true_price"]);
        return view('user.production_container', $data);
    }
}
