<section class="contact-section ftco-section ftco-animate" id="contact">
  <div class="container">
  	<div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-4 heading-section text-center ftco-animate">
        <h2 class="mb-4">Contact Me</h2>
        <p>If you have any questions or business inquiries regarding Dani Hana, you can contact me using the format below.</p>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-3 d-flex ftco-animate">
      	<div class="align-self-stretch box text-center p-4">
      		<div class="icon d-flex align-items-center justify-content-center">
      			<span class="icon-map-signs"></span>
      		</div>
      		<div>
        		<h3 class="mb-4">Address</h3>
            <p>{{ $data->address }}</p>
          </div>
        </div>
      </div>

      @if($data->phone_number)
      <div class="col-md-3 d-flex ftco-animate">
      	<div class="align-self-stretch box text-center p-4">
      		<div class="icon d-flex align-items-center justify-content-center">
      			<span class="icon-phone2"></span>
      		</div>
      		<div>
        		<h3 class="mb-4">Contact Number</h3>
            <p><a href="tel://{{ $data->phone_number }}">{{ $data->phone_number }}</a></p>
          </div>
        </div>
      </div>
      @endif

      <div class="col-md-3 d-flex ftco-animate">
      	<div class="align-self-stretch box text-center p-4">
      		<div class="icon d-flex align-items-center justify-content-center">
      			<span class="icon-paper-plane"></span>
      		</div>
      		<div>
        		<h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex ftco-animate">
      	<div class="align-self-stretch box text-center p-4">
      		<div class="icon d-flex align-items-center justify-content-center">
      			<span class="icon-globe"></span>
      		</div>
      		<div>
        		<h3 class="mb-4">Website</h3>
            <p><a href="#">{{ $data->website_link }}</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row block-9">
      <div class="col-md-6 ftco-animate">
        <form action="#" class="contact-form p-4 p-md-5 py-md-5">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>

      <div class="col-md-6 d-flex align-items-stretch">
      	<div id="map"></div>
      </div>
    </div>
  </div>
</section>