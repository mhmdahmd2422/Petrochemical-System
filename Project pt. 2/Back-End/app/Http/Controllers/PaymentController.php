<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
//        $data['products'] = Product::get(["name", "id", "true_price"]);
        return view('user.payment');
    }

    public function add_payment_data(Request $request)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $payment = new Payment;
            $payment->email = $user->email;
            $payment->phone = $user->phone;
            $payment->address1 = $request->address1;
            $payment->address2 = $request->address2;
            $payment->postcode = $request->postcode;
            $payment->signature = $request->signature;
            $payment->card_name = $request->card_name;
            $payment->card_number = $request->card_number;
            $payment->exp_year = $request->exp_year;
            $payment->exp_month = $request->exp_month;
            $payment->cvc = $request->cvc;
            $payment->user_id = $user->id;
            $payment->user_name = $user->name;
            $payment->save();
        } else {
            return view('auth.login');
        }
        return redirect('/');
//            ->with('message', 'Your Order Details are Successfully Submitted!');
    }
}
