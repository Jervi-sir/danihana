<section id="home" class="hero-wrap js-fullheight" style="background-image: url({{ $data->main_image }});" data-stellar-background-ratio="0.5" >
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-lg-7 ftco-animate d-flex align-items-center">
      	<div class="text text-center">
      		<h1 class="logo" style="margin: 7px"><a href="#home"><img src="{{ asset($data->logo_image) }}" alt="{{ $data->title }}" width="100%" height="100%" style="max-width:6em;"><small>Artist / San Diego</small></a></h1>
  				<h1 class="mb-4">Dani Hana <br>HQ</h1>
  				<p class="mb-4" style="font-size: 16px;font-weight: 660;">{{ $data->slogan }}</p>
  				<p class="mt-5"><a href="#contact" class="btn-custom" data-scroll="contact">Contact us <span class="ion-ios-arrow-round-forward"></span></a></p>
        </div>
      </div>
    </div>
  </div>
</section>