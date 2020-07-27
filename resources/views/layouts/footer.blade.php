<!-- start footer Area -->
<footer class="footer-area section_gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div id="footer-style" class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>{{ __('À propos de nous') }}</h6>
					<p>
						{{ __('Happy Day, agence de communication globale de Dunkerque, spécialisée dans le conseil et l\'accompagnement de ses clients.') }}
					</p>
				</div>
			</div>
			<div id="footer-style" class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">{{ __('Flux Instragram') }}</h6>
					<ul class="instafeed d-flex flex-wrap">
						<li><img src="{{ asset('img/i1.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i2.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i3.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i4.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i5.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i6.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i7.jpg') }}" alt="image instagram"></li>
						<li><img src="{{ asset('img/i8.jpg') }}" alt="image instagram"></li>
					</ul>
				</div>
			</div>
			<div id="footer-style" class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>{{ __('Suivez-nous') }}</h6>
					<p>{{ __('Sur les réseaux sociaux') }}</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
			<p class="footer-text m-0">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				{{ __('Copyright') }} &copy;<script>
					document.write(new Date().getFullYear());
				</script> {{ __('Tous droits réservés, site fait avec ') }} <i class="fa fa-heart-o" aria-hidden="true"></i>{{ __(' par ') }}<a href="http://www.happyday.fr/" target="_blank">HappyDay</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<div class="col-md-12 text-center">
					<a href="{{ route('mentions') }}">Mentions Légales / Politique de confidentialité</a>
				</div>
			</p>
		</div>
	</div>
</footer>
<!-- End footer Area -->