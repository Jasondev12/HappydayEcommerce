@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Commandes</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Menu<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Commandes</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container my-5">
    <div class="orders">
        <h2 class="text-center">Détails des commandes</h2>
        <div class="table-responsive order_details_table">
            <div class="d-flex justify-content-between my-5 px-5">
                <h4>
                    <img class="iconeOrder" src="../icones/receipt.svg" alt="logo reçu commande">
                    Commande #1234
                </h4>
                <h4>Date : 12/07/2020</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td class="col">Produit</td>
                        <td class="col">Quantité</td>
                        <td class="col">Total</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nom Produit</td>
                        <td>x 1</td>
                        <td>10€</td>
                    </tr>
                    <tr>
                        <td><b>Sous-total</b></td>
                        <td></td>
                        <td>10€</td>
                    </tr>
                    <tr>
                        <td><b>Taxe</b></td>
                        <td></td>
                        <td>0.85€</td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td></td>
                        <td>10.85€</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop