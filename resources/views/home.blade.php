@extends('layouts.master')

@section('content')

<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					<!-- single-slide -->
					@foreach($news as $new)
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Nouveautés</h1>
								<h3>{{ $new->name }}</h3>
								<p>{!! $new->details !!}</p>
								<div class="add-bag d-flex align-items-center">
									<form action="{{ route('cart.store') }}" method="POST">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $new->id }}">
										<input type="hidden" name="name" value="{{ $new->name }}">
										<input type="hidden" name="price" value="{{ $new->price }}">
										<button type="submit" class="primary-btn">
											<span class="text-uppercase">Ajouter au panier</span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-slide" src="{{ Voyager::image($new->image) }}" alt="">
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Derniers produits</h1>
						<p>Pour vous les produits se réinventent tous les jours, craquez pour toutes les nouveautés - De nombreux cadeaux offerts pour chaque commande.</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($latestProducts as $product)
				<!-- single product -->
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="{{ Voyager::image($product->image) }}" alt="">
						<div class="product-details">
							<h6>{{ $product->name }}</h6>
							<div class="price">
								<h6>{{ $product->price }}€</h6>
							</div>
							<div class="prd-bottom">
								<!-- Add -->
								<form id="{{ $product->slug }}" action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $product->id }}">
									<input type="hidden" name="name" value="{{ $product->name }}">
									<input type="hidden" name="price" value="{{ $product->price }}">

									<a href="#" onclick="document.getElementById('{{ $product->slug }}').submit()" class="social-info"><span class="ti-bag-shop"></span>
										<p class="hover-text">Ajouter</p>
									</a>
								</form>
								<!-- Save -->
								<form id="{{ $product->id }}" action="{{ route('cart.save', $product->id) }}" method="POST">
									{{ csrf_field() }}
									<a href="#" onclick="document.getElementById('{{ $product->id }}').submit()" class="social-info"><span class="lnr lnr-heart"></span>
										<p class="hover-text">Enregistrer</p>
									</a>
								</form>
								<!-- View more -->
								<a href="{{ route('shop.show', $product->slug) }}" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">Voir plus</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Meilleures ventes</h1>
						<p>Les meilleures ventes. Nos produits les plus populaires selon les ventes. Mises à jour chaque heure.</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($bestsellers as $bestseller)
				<!-- single product -->
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="{{ Voyager::image($bestseller->image) }}" alt="images des meilleurs ventes">
						<div class="product-details">
							<h6>{{ $bestseller->name }}</h6>
							<div class="price">
								<h6>{{ $bestseller->price }}€</h6>
								<!--<h6 class="l-through">210.00€</h6>-->
							</div>
							<div class="prd-bottom">
								<!-- Add -->
								<form id="{{ $bestseller->slug }}" action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $bestseller->id }}">
									<input type="hidden" name="name" value="{{ $bestseller->name }}">
									<input type="hidden" name="price" value="{{ $bestseller->price }}">
									<a href="#" onclick="document.getElementById('{{ $bestseller->slug }}').submit()" class="social-info"><span class="ti-bag-shop"></span>
										<p class="hover-text">Ajouter</p>
									</a>
								</form>
								<!-- Save -->
								<form id="{{ $bestseller->id }}" action="{{ route('cart.save', $bestseller->id) }}" method="POST">
									{{ csrf_field() }}
									<a href="#" onclick="document.getElementById('{{ $bestseller->id }}').submit()" class="social-info"><span class="lnr lnr-heart"></span>
										<p class="hover-text">Enregistrer</p>
									</a>
									<!-- View more -->
								</form>
								<a href="{{ route('shop.show', $bestseller->slug) }}" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">Voir plus</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- end product Area -->
<!-- Start brand Area -->
<section class="brand-area section_gap">
	<div class="container">
		<div class="row">
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
			</a>
		</div>
	</div>
</section>
<!-- End brand Area -->
@stop