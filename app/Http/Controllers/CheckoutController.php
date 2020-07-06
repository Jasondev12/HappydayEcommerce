<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // Afficher le formulaire de paiement
    public function checkout()
    {
        return view('checkout');
    }

    // Gérer le paiement
    public function store(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = \Stripe\Charge::create([
                'amount' => $request->montant * 100 - session()->get('coupon')['discount'] * 100,
                'currency' => 'eur',
                'description' => 'Mon paiement',
                'source' => $request->stripeToken,
                'receipt_email' => $request->email,
                'metadata' => [
                    'owner' => $request->name,
                    'products' => Cart::content()->toJson()
                ]
            ]);
            return redirect()->route('checkout.success')->with('success', 'Merci. Votre paiement a été accepté.');
        } catch (\Stripe\Exception\CardErrorException $e) {
            throw $e;
        }
    }

    // En cas de paiement réussi
    public function success()
    {
        if(!session()->has('success')){
            return redirect()->route('home');
        }
        Cart::destroy();
        session()->forget('coupon');
        return view('success');
    }
}
