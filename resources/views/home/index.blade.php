@extends('layout.master')

@section('contents')
  
    <!-- Start nav Section -->
      @include('home.navbar')
		<!-- End Nav Section -->

		<!-- Start main Section -->
      @include('home.main')
		<!-- End Home Section -->

		<!-- Start About Me Section -->
      @include('home.about')
		<!-- End About Me Section -->

		<!-- Start Services Section -->
      @include('home.music')
		<!-- End Services Section -->

		<!-- Start Testimonials Section -->
      @include('home.gallery')
		<!-- End Project Section -->

		<!-- Start Contact Section -->
      @include('home.contact')
		<!-- End Contact Section -->

		<!-- Start Footer Section -->
      @include('home.footer')
		<!-- End Footer Section -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@endsection
