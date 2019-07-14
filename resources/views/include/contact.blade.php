@include('include.header')
<div class="header-text text-center header-image-contact" style="padding-top:220px">
    <h2 style="font-size:35px;min-height:40px;color:white" id="text-shadow6"></h2>
  </div>

	<section class="personal">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="call-us" style="background-color:#446;box-shadow: 5px 10px 8px #888;margin-bottom:20px;border-radius:5px">

						<i class="fa fa-phone" aria-hidden="true"></i>
						<h2>Phone</h2>
						<p> <span>08293038393.</span><br />
						<span>08293038393.</span></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="email-address" style="background-color:#446;box-shadow: 5px 10px 8px #888;margin-bottom:20px;border-radius:5px">
						<i class="fa fa-envelope"></i>
						<h2>Email</h2>
						<p> <span>wow.example00@gmail.com</span><br />
						<span>wow.example00@gmail.com</span></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="personal-address" style="background-color:#446;box-shadow: 5px 10px 8px #888;margin-bottom:20px;border-radius:5px">
						<i class="fa fa-map-marker"></i>
						<h2>Address</h2>
						<p>45/B Street, 21 Gulistan Road <br />
						Dhaka South.</p>
					</div>
				</div>


			</div>
		</div>

	</section>
	<section>
		<div class="contact-w3-agile1 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3653.2651703335387!2d90.42442786432707!3d23.702222846533406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1535726070858" style="border:0;width:100%;height:300px;" allowfullscreen></iframe>

				</div>
	</section>
	<section class="contact-form-area">
		<div class="container">
			<div class="form-text text-center">
				<h2>Get in Touch</h2>
				<p> lorem ipsum lorem ipsum lorem.</p>
			</div>

			<div class="row">
        <form method="post" action="{{ url('/contact/insert') }}">
          @csrf
				<div class="col-md-6 input-field-area single">
					<input type="text" name="name" id="name" placeholder="Name*"/>
					<input type="email" name="email" id="email" required placeholder="Email*"/>
				</div>
				<div class="col-md-6 input-field-area single">
					<input type="text" name="phone" id="phone" placeholder="Phone*"/>
					<input type="text" name="subject" id="subject" placeholder="Subject"/>
				</div>

				<div class="col-md-12 input-field-area text-center">
					<textarea name="message" id="message" cols="90" rows="10"></textarea>
          <button class="btn col-md-12" style="background-color:#446;padding:10px 0;color:white" type="submit">MESSAGE SEND</button>
				</div>
      </form>
			</div>
		</div>
	</section>
@include('include.footer')
