@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Réinitialiser mot de passe</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Menu<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Réinitialiser mot de passe</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{ asset('img/login.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Réinitialisation du mot de passe</h3>
                    <form class="row login_form" id="contactForm" novalidate="novalidate" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <!-- Email -->
                        <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Votre Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- Submit -->
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection
