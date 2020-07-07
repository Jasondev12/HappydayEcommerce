@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Menu<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
		@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block text-center">
                <button type="button" class="close" id="closeSuccess" data-dismiss="alert"><img class="iconeChecked" src="../icones/close.svg" alt="logo fermer message success"></button>
                {{ $message }}
            </div>
            @endif
			
			<div class="row order_d_inner">
			<div class="col-lg-4">
					<div class="details_item">
						<h4>Contact Info</h4>
						<ul class="list">
							<li><a href="#"><span>Nom</span> : {{ $order->paiement_firstname}}</a></li>
							<li><a href="#"><span>Prénom</span> : {{ $order->paiement_name }}</a></li>
							<li><a href="#"><span>E-mail</span> : {{ $order->paiement_email }} €</a></li>
							<li><a href="#"><span>Numéro client</span> : {{ $order->user_id }}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Numéro de commande</span> : {{ $order->id}}</a></li>
							<li><a href="#"><span>Date</span> : {{ $order->created_at }}</a></li>
							<li><a href="#"><span>Total</span> : {{ $order->paiement_total, 2}} €</a></li>
							<li><a href="#"><span>Méthode de paiement</span> : Stripe</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a href="#"><span>Adresse</span> : {{ $order->paiement_address }}</a></li>
							<li><a href="#"><span>Ville</span> : {{ $order->paiement_city }}</a></li>
							<li><a href="#"><span>Téléphone</span> : {{ $order->paiement_phone }}</a></li>
							<li><a href="#"><span>Code postal </span> : {{ $order->paiement_postalcode }}</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Pixelstore fresh Blackberry</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>720.00€</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>2160.00€</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: 50.00€</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>2210.00€</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

@stop