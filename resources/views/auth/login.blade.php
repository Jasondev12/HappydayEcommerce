@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
{!! Breadcrumbs::render('login') !!}
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="Image créer un compte">
                    <div class="hover">
                        <h4>{{ __('Nouveau sur notre site Web ?') }}</h4>
                        <p>{{ __('Nous serions ravis de vous compter parmi nos clients !') }}</p>
                        <a class="primary-btn" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>{{ __('Se connecter pour entrer') }}</h3>
                    <form class="row login_form" id="contactForm" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <!-- Email -->
                        <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="email" name="email" placeholder="{{ __('Votre Email') }}" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- Password -->
                        <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Votre mot de passe') }}" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- Submit -->
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">{{ __('Se connecter') }}</button>
                            <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

@endsection