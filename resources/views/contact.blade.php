@extends('layouts.master')

@section('content')


<!-- Start Banner Area -->
{!! Breadcrumbs::render('contact') !!}
<!-- End Banner Area -->

<!--================Contact Area =================-->
<section class="message_area">
	<div class="container">
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" id="closeSuccess" data-dismiss="alert"><img class="iconeChecked" src="../icones/close.svg" alt="logo fermer message success"></button>
		{{ $message }}
	</div>
	@endif
	</div>
</section>
<section class="contact_area section_gap_bottom">
	<div class="container">
		<div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-home"></i>
						<h6>California, United States</h6>
						<p>Santa monica bullevard</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><a href="#">00 (440) 9865 562</a></h6>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="#">support@colorlib.com</a></h6>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<form action="{{ route('contact.store') }}" class="row needs-validation" method="POST">
					{{ csrf_field() }}
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Nom:</label>
							<input type="text" class="form-control" id="name" placeholder="Entrer votre nom" name="name" minlength="2" required>
							<div class="valid-feedback">Nom valide.</div>
							<div class="invalid-feedback">Veuillez saisir un nom valide de plus de 2 caractères.</div>
						</div>
						<div class="form-group">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" id="email" placeholder="Entrer votre e-mail" name="email" required>
							<div class="valid-feedback">E-mail valide.</div>
							<div class="invalid-feedback">Veuillez saisir une adresse e-mail valide.</div>
						</div>
						<div class="form-group">
							<label for="subject">Sujet:</label>
							<input type="text" class="form-control" id="subject" placeholder="Entrer votre sujet" name="subject" minlength="5" maxlength="100" required>
							<div class="valid-feedback">Sujet valide.</div>
							<div class="invalid-feedback">Veuillez saisir un sujet valide de plus de 5 caractères.</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="message">Message:</label>
							<textarea type="text" class="form-control" id="message-textarea" placeholder="Entrer votre message" name="message" minlength="15" maxlength="1500" required></textarea>
							<div class="valid-feedback">Message valide.</div>
							<div class="invalid-feedback">Veuillez saisir un message de plus de 15 et moins de 1500 caractères.</div>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<div class="col-md-6">
						<p class="text-muted">Si vous avez des problèmes avec ce service, veuillez <a href="mailto:{{ config('configmail.admin_support_email') }}">demander de l’aide</a>.</p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->

<script>
	// Disable form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Get the forms we want to add validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>

@stop