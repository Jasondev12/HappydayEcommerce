@extends('layouts.master')

@section('includes')
<script src="https://js.stripe.com/v3/"></script>

@section('content')

@stop

<!-- Start Banner Area -->
{!! Breadcrumbs::render('checkout') !!}
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form novalidate" action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                        {{ csrf_field() }}
                        <!-- Nom de famille -->
                        <div class="col-md-6 form-group p_star">
                            <div class="flex-input">
                            <label for="lastname">Nom :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control" id="lastname" name="name" placeholder="Saisir nom" required>
                        </div>
                        <!-- Prénom -->
                        <div class="col-md-6 form-group p_star">
                            <div class="flex-input">
                            <label for="prénom">Prénom :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control is-valid" id="firstname" name="firstname" placeholder="Saisir prénom" required>
                        </div>
                        <!-- Numéro téléphone -->
                        <div class="col-md-6 form-group p_star">
                            <div class="flex-input">
                            <label for="telephone">Numéro de téléphone :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control is-valid" id="number" name="phone" placeholder="Saisir numéro de téléphone" required>
                        </div>
                        <!-- Adresse E-mail -->
                        <div class="col-md-6 form-group p_star">
                            <div class="flex-input">
                            <label for="email">Adresse e-mail :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control is-valid" id="email" name="email" placeholder="Saisir adresse e-mail" required>
                        </div>
                        <!-- Adresse -->
                        <div class="col-md-12 form-group p_star">
                            <div class="flex-input">
                            <label for="adresse">Adresse :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control is-valid" id="add1" name="address" placeholder="Saisir adresse" required>
                        </div>
                        <!-- Ville -->
                        <div class="col-md-12 form-group p_star">
                            <div class="flex-input">
                            <label for="ville">Ville :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control is-valid" id="city" name="city" placeholder="Saisir ville" required>
                        </div>
                        <!-- Code postal -->
                        <div class="col-md-12 form-group p_star">
                            <div class="flex-input">
                            <label for="cp">Code postal :<span id="input-style" class="placeholder" data-placeholder=""></span></label>
                            </div>
                            <input type="text" class="form-control is-valid" id="zip" name="postalcode" placeholder="Saisir code postal" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <!--  Crédit Or debit card section -->
                                <div class="form-group">
                                    <label for="card-element">
                                        Carte de crédit ou carte de débit
                                    </label>
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                                <!-- end credit or debit card section -->
                            </div>
                        </div>
                        <button id="complete-order" type="submit" class="primary-btn my-3">Procéder au paiement {{ session()->has('coupon')
                                ? Cart::total() - session()->get('coupon')['discount']
                                : Cart::total()
                             }}€</button>
                        <input type="hidden" name="montant" value="{{ Cart::total() }}">
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Vos commandes</h2>
                        <ul class="list">
                            <li><a href="#">Product <span>Total</span></a></li>
                            @foreach(Cart::content() as $product)
                            <li><a class="product-style" href="#">{{ $product->name}}<span class="middle">x {{ $product->qty }}</span> <span class="last">{{ $product->price }}€</span></a></li>
                            @endforeach
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Sous-total <span>{{ Cart::subtotal() }}€</span></a></li>

                            @if(session()->has('coupon'))
                            <li><a href="#">Réduction ({{ session()->get('coupon')['name'] }})<span>- {{ session()->get('coupon')['discount'] }} €</span></a></li>
                            <form action="{{ route('coupon.destroy') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn" type="submit">
                                    <img class="iconeTrash" src="../icones/trash.svg" alt="logo corbeille code promo">
                                </button>
                            </form>
                            @endif

                            <li><a href="#">Taxe <span>{{ Cart::tax() }}€</span></a></li>
                            <li><a href="#">Total <span>{{ session()->has('coupon')
                                ? Cart::total() - session()->get('coupon')['discount']
                                : Cart::total()
                             }}€</span></a></li>
                        </ul>
                    </div>
                    <div class="coupon my-3">
                        <div class="code">
                            <p>Vous avez un code ?</p>
                            <form action="{{ route('coupon.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="d-flex align-items-center contact_form">
                                    <input type="text" name="coupon" id="coupon" class="form-control" placeholder="Code promo">
                                    <button class="primary-btn my-3" type="submit">
                                        <img class="iconeChecked" src="../icones/checked.svg" alt="logo appliquer code promo">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
@stop

@section('js')
<script src="{{ asset('js/stripe.js') }}"></script>
@stop