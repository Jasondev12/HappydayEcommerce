@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
{!! Breadcrumbs::render('shop') !!}
<!-- End Banner Area -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Parcourir les catégories</div>
				<ul class="main-categories">
					@foreach($categories as $category)
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
							<a href="{{ route('shop.index', ['category' => $category->slug]) }}">
								{{ $category->name }} <span class="number">({{ count($category->products) }})</span>
							</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<!-- Start Filter Bar -->
			<div id="dropwdown-style" class="filter-bar d-flex flex-wrap align-items-center mb-5">

				<div id="" class="btn-group d-flex align-items-center">
					<button type="button" class="btn btn-white">Trier par :</button>
					<button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ route('shop.index', ['cateogry' => request()->category, 'sort' => 'asc']) }}">Prix croissant</a>
						<a class="dropdown-item" href="{{ route('shop.index', ['cateogry' => request()->category, 'sort' => 'desc']) }}">Prix décroissant</a>
					</div>
				</div>

				<div class="pagination ml-auto d-flex  align-items-center " id="pagination-style">
					{{ $products->appends(request()->input())->links() }}
				</div>
			</div>
			<!-- End Filter Bar -->
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					@foreach($products as $product)
					<!-- single product -->
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<a href="{{ route('shop.show', $product->slug) }}">
								<img class="img-fluid" src="{{ Voyager::image($product->image) }}" alt="">
							</a>
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
			</section>
			<!-- End Best Seller -->
			<!-- Start Filter Bar -->
			<div id="dropwdown-style" class="filter-bar d-flex flex-wrap align-items-center mb-5">

				<div id="" class="btn-group d-flex align-items-center">
					<button type="button" class="btn btn-white">Trier par :</button>
					<button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ route('shop.index', ['cateogry' => request()->category, 'sort' => 'asc']) }}">Prix croissant</a>
						<a class="dropdown-item" href="{{ route('shop.index', ['cateogry' => request()->category, 'sort' => 'desc']) }}">Prix décroissant</a>
					</div>
				</div>

				<div class="pagination ml-auto d-flex  align-items-center " id="pagination-style">
					{{ $products->appends(request()->input())->links() }}
				</div>
			</div>
			<!-- End Filter Bar -->
		</div>
	</div>
</div>



@stop