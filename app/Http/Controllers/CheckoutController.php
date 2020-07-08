<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CheckoutController extends Controller
{
    public function __construct()
    {
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
                    'products' => Cart::content()->toJson(),
                ],
            ]);

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'paiement_firstname' => $request->firstname,
                'paiement_name' => $request->name,
                'paiement_phone' => $request->phone,
                'paiement_email' => $request->email,
                'paiement_address' => $request->address,
                'paiement_city' => $request->city,
                'paiement_postalcode' => $request->postalcode,
                'discount' => session()->get('coupon')['name'] ?? null,
                'paiement_total' => $request->montant - session()->get('coupon')['discount'],
            ]);

            foreach (Cart::content() as $product) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $product->qty,
                ]);
            }

            return redirect()->route('checkout.success')->with('success', 'Merci. Votre paiement a été accepté.');
        } catch (\Stripe\Exception\CardErrorException $e) {
            throw $e;
        }
    }

    // En cas de paiement réussi
    public function success()
    {
        if (!session()->has('success')) {
            return redirect()->route('home');
        }
        $order = Order::latest()->first();

        Cart::destroy();
        session()->forget('coupon');
        
        return view('success', [
            'order' => $order,
        ]);
    }
}
