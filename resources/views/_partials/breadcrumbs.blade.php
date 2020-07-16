@if ($breadcrumbs)
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first text-center">
                <h1 id="bread-style">{{ end($breadcrumbs)->title }}</h1>
                @foreach($breadcrumbs as $breadcrumb)
                @if(!$breadcrumb->last)
                <a class="bread-style" id="bread-title" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a><i id="arrow-right" class="fas fa-arrow-right mx-2"></i>
                @else
                <a class="bread-style" id="breadactive-title" class="active">{{ $breadcrumb->title }}</a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif