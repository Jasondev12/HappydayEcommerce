@extends('layouts.master')

@section('content')

 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Panier</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Menu<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Panier</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" id="closeSuccess" data-dismiss="alert"><img class="iconeChecked" src="../icones/close.svg" alt="logo fermer message success"></button>
                {{ $message }}
            </div>
            @endif
            <div class="cart_inner">

            @if(Cart::count() > 0)

            <h2 class="text-center my-5">{{ Cart::count() }} Article(s) dans le panier</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $product)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img id="cart-image" src="{{ Voyager::image($product->model->image) }}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>{{ $product->model->name }}</h4>
                                            <p>{!! $product->model->details !!}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{ $product->model->price }}€</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input disabled type="text" name="qty" id="sst" maxlength="12" value="x {{ $product->qty }}" title="Quantité:"
                                            class="input-text qty">
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn primary-btn">Supprimer</button>
                                    </form>
                                    <form action="{{ route('cart.save', $product->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-link">Enregistrer produit </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <h5>Sous-total</h5>
                                    <p>Taxe</p>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <h5>{{ Cart::subtotal() }}€</h5>
                                    <p>{{ Cart::tax() }}€</p>
                                    <h4>{{ Cart::total() }}€</h4>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="{{ route('shop.index') }}">Continuer achats</a>
                                        <a class="primary-btn" href="{{ route('checkout.index') }}">Procéder au paiement</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <h3 class="my-3 text-center">Pas d’article dans le panier</h3>
                <div class="d-flex justify-content-around">
                    <a class="gray_btn" href="{{ route('shop.index') }}">Continuer achats</a>
                </div>
                @endif
            </div>
        </div>
        <div class="single-product-slider">
            <div class="container">
                @if(Cart::instance('save')->count() > 0)
                    <h2 class="text-center my-5">{{ Cart::instance('save')->count() }} Article(s) enregistré(s)</h2>
                    <div class="row">
                        @foreach(Cart::instance('save')->content() as $product)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="{{ Voyager::image($product->model->image) }}" alt="image produit enregistré">
                                    <div class="product-details">
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->


@stop