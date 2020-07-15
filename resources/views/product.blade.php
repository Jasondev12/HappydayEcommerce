@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
{!! Breadcrumbs::render('product', $product) !!}
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ Voyager::image($product->image) }}" alt="images produits du magasin">
						</div>
						@foreach(json_decode($product->images, true) as $image)
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ Voyager::image($image) }}" alt="images produits du magasin">
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{ __("$product->name") }}</h3>
						<h2 class="textBlue">{{ $product->price }}{{ __("€") }}</h2>
						<ul class="list">
							<li><a  class="active textBlue" href="#"><span>{{ __("Categorie") }}</span> : {{ $product->category->name }}</a></li>
							<li><a href="#"><span>{{ __("Disponibilité") }}</span> : {{ __("En stock") }}</a></li>
						</ul>
						<div class="productDetails">{!! __("$product->details") !!}</div>
						<div class="card_area d-flex align-items-center">
						<form action="{{ route('cart.store') }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{ $product->id }}">
								<input type="hidden" name="name" value="{{ $product->name }}">
								<input type="hidden" name="price" value="{{ $product->price }}">
								<button class="primary-btn" type="submit">{{ __("Ajouter au panier") }}</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{ __("Description") }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">{{ __("Spécification") }}</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>{{ __("$product->description") }}</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="home-tab">
					<p class="text-center">{{ __("Aucune spécification pour le moment") }}</p>
				</div> 
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

@stop