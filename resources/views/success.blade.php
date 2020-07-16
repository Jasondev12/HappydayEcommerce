@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
{!! Breadcrumbs::render('confirmation') !!}
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
					<h4>{{ __("Contact Info") }}</h4>
					<ul class="list">
						<li><a href="#"><span>{{ __("Nom") }}</span> : {{ $order->paiement_firstname}}</a></li>
						<li><a href="#"><span>{{ __("Prénom") }}</span> : {{ $order->paiement_name }}</a></li>
						<li><a href="#"><span>{{ __("E-mail") }}</span> : {{ $order->paiement_email }} €</a></li>
						<li><a href="#"><span>{{ __("Numéro client") }}</span> : {{ $order->user_id }}</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="details_item">
					<h4>{{ __("Info commande") }}</h4>
					<ul class="list">
						<li><a href="#"><span>{{ __("Numéro de commande") }}</span> : {{ $order->id}}</a></li>
						<li><a href="#"><span>Date</span> : {{ $order->created_at }}</a></li>
						<li><a href="#"><span>Total</span> : {{ round($order->paiement_total, 2) }} €</a></li>
						<li><a href="#"><span>{{ __("Méthode de paiement") }}</span> : Stripe</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="details_item">
					<h4>{{ __("Adresse de livraison") }}</h4>
					<ul class="list">
						<li><a href="#"><span>{{ __("Adresse") }}</span> : {{ $order->paiement_address }}</a></li>
						<li><a href="#"><span>{{ __("Ville") }}</span> : {{ $order->paiement_city }}</a></li>
						<li><a href="#"><span>{{ __("Téléphone") }}</span> : {{ $order->paiement_phone }}</a></li>
						<li><a href="#"><span>{{ __("Code postal") }}</span> : {{ $order->paiement_postalcode }}</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="order_details_table">
			<h2>{{ __("Détails de la commande") }}</h2>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">{{ __("Produit") }}</th>
							<th scope="col">{{ __("Quantité") }}</th>
							<th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>
						@foreach($order->products as $product)
						<tr>
							<td>
								<p>{{ __("$product->name") }}</p>
							</td>
							<td>
								<h5>x {{ $product->pivot->quantity }}</h5>
							</td>
							<td>
								<p>{{ round($product->price * $product->pivot->quantity, 2) }}{{ __("€") }}</p>
							</td>
						</tr>
						@endforeach
						<tr>
							<td>
								<h4>{{ __("Taxe") }}</h4>
							</td>
							<td>
								<h5></h5>
							</td>
							<td>
								<p>{{ $order->paiement_total - round($product->price * $product->pivot->quantity) }}{{ __("€") }}</p>
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
								<p>{{ round($order->paiement_total, 2) }}{{ __("€") }}</p>
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