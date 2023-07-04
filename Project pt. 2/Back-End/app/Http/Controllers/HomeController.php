<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function redirect(){
        $usertype = Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            $type = Type::all();
            return view('user.home', compact('type'));
        }
    }
}
