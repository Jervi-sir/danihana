<section class="ftco-about img ftco-section" id="about">
	<div class="container">
		<div class="row d-flex no-gutters">
			<div class="col-md-6 col-lg-6 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
    				<div class="img img-video d-flex align-self-stretch align-items-center" style="background-image:url({{json_decode($data->gallery, true)[1]}});">
    					<div class="video justify-content-center">
								<a href="{{ $data->video_link }}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 pl-md-5">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4">The Dani Hana, <br>Headquarters</h2>
            <p>An artist from San Diego, I do art in waveforms, It is not just music. It is connections, it is family, it is experiences, it is me, it is Dani Hana.</p>

            <div class="counter-wrap ftco-animate d-flex my-md-4">
             
	          </div>
	          <div class="d-flex w-100">
	            <div class="img img-about-2 mr-2" style="background-image: url({{json_decode($data->gallery, true)[0]}});"></div>
	            <div class="img img-about-2 ml-2" style="background-image: url({{json_decode($data->gallery, true)[2]}});"></div>
	          </div>
	         
          </div>
        </div>
    </div>
	</div>
</section>