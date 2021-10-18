<section id="work" class="ftco-section">
  <div class="container">
  	<div class="row justify-content-center">
  		<div class="col-md-4 heading-section text-center ftco-animate pb-5">
        		<h2 class="mb-4">A Gallery</h2>
        <p>This is a gallery that holds most of the images of me, Dani Hana.</p>
      </div>
  	</div>
  </div> 
  <div class="container-fluid px-md-0">
    <div class="row no-gutters">
      <div class="col-md-4 ftco-animate">
        <div class="model img d-flex align-items-end" style="background-image: url({{json_decode($data->gallery, true)[0]}});">
        	<a href="{{json_decode($data->gallery, true)[0]}}" class="icon image-popup d-flex justify-content-center align-items-center">
  					<span class="icon-expand"></span>
  				</a>
        	<div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
            	<span>{{json_decode($data->title_gallery, true)[0]}}</span>
            	<h2>{{json_decode($data->description_gallery, true)[0]}}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="model img d-flex align-items-end" style="background-image: url({{json_decode($data->gallery, true)[1]}});">
        	<a href="{{json_decode($data->gallery, true)[1]}}" class="icon image-popup d-flex justify-content-center align-items-center">
  					<span class="icon-expand"></span>
  				</a>
        	<div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
            	<span>{{json_decode($data->title_gallery, true)[1]}}</span>
            	<h2>{{json_decode($data->description_gallery, true)[1]}}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="model img d-flex align-items-end" style="background-image: url({{json_decode($data->gallery, true)[2]}});">
        	<a href="{{json_decode($data->gallery, true)[2]}}" class="icon image-popup d-flex justify-content-center align-items-center">
  					<span class="icon-expand"></span>
  				</a>
        	<div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
            	<span>{{json_decode($data->title_gallery, true)[2]}}</span>
            	<h2>{{json_decode($data->description_gallery, true)[2]}}</h2>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div> 
</section>