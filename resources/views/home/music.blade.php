<section id="services" class="ftco-section">
  <div class="container">
	<div class="row progress-circle pt-md-5">
		<div class="col-md-7 order-md-last py-md-5">
			<div class="row">
		  		<div class="col-md-4 mb-md-0 mb-4 ftco-animate">

					<div class="p-md-4 mt-4 text-center">	
						<div class="col-md-4 heading-section text-center ftco-animate mb-5">
    						<h2 class="mb-2">Listen to my,<br>Music</h2>
						</div>
						<iframe class="spotify-responsive" src="{{ $data->embed_spotify_link }}" style="border: 0;" allowfullscreen allow="encrypted-media" width="300" height="400"></iframe>
                        
                        <style>
                            .spotify-responsive 
                                {
                                  width: 42em; 
                                }
                            
                            @media (min-width: 596px) 
                            {
                                .spotify-responsive 
                                {
                                  width: 24em; 
                                } 
                            }
                            
                            @media (max-width: 1363px) 
                            {
                                .spotify-responsive 
                                {
                                  width: 32em; 
                                } 
                            }
                            @media (max-width: 1096px) 
                            {
                                .spotify-responsive 
                                {
                                  width: 26em; 
                                } 
                            }
                            @media (max-width: 952px) 
                            {
                                .spotify-responsive 
                                {
                                  width: 18em; 
                                } 
                            }
                            @media (min-width: 1359px) 
                            {
                                .spotify-responsive 
                                {
                                  width: 41em; 
                                } 
                            }
                        </style>
					<!-- END -->
				    </div>
			    </div>

			   
			    <div class="p-md-4 mt-4">
			    	<div class="col-md-8 ftco-animate">
				    	<blockquote class="blockquote mt-5">
				          	<p class="mb-2">"I am an artist by the word, I do not make only music, I make art in waveforms, enjoy the joints, and leave that drama for yo momma!"</p>
				          	<span>&mdash; Dani Hani</span>
				        </blockquote>
			    	</div>
			    </div>
			  </div>
			</div>
			<div class="col-md-5 d-flex align-items-stretch">
    	<div class="img w-100" style="background-image: url({{ $data->music_side_image }});"></div>
    </div>
  	</div>
  </div>
</section>  