@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
{!! Breadcrumbs::render('orders') !!}
<!-- End Banner Area -->
<div class="container my-5">
    <div class="orders">
        <h2 class="text-center">{{ __("Détails des commandes") }}</h2>
        @foreach($orders as $order)
        <div class="table-responsive order_details_table">
            <div class="d-flex justify-content-between my-5 px-5">
                <h4>
                    <img class="iconeOrder" src="../icones/receipt.svg" alt="logo reçu commande">
                    {{ __("Commande") }} #{{ $order->id }}
                </h4>
                <h4>Date : {{ $order->created_at }}</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td class="col">{{ __("Produit") }}</td>
                        <td class="col">{{ __("Quantité") }}</td>
                        <td class="col">{{ __("Total") }}</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                    <tr>
                        <td>{{ __("$product->name") }}</td>
                        <td>x {{ $product->pivot->quantity }}</td>
                        <td>{{ round($product->price * $product->pivot->quantity, 2) }}{{ __("€") }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td><b>{{ __("Total") }}</b></td>
                        <td></td>
                        <td>{{ round($order->paiement_total) }}{{ __("€") }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>

@stop