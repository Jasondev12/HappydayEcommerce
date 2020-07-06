<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon)->first();

        if(!$coupon) return redirect()->route('checkout.index')->withErrors('Coupon invalide. Veuillez réessayer.');

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->value
        ]);
        return redirect()->route('checkout.index')->with('success', 'Le coupon a été appliqué !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('checkout.index')->with('success', 'Le coupon a été retiré !');
    }
}
