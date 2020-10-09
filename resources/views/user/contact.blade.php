@extends('user/layouts/app')

@section('content')
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(../images/111.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">
                                       STARENGLISH
                                   </h1>
									<h1>Contact Us</h1>>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
    </aside>



	<div id="fh5co-contact">
		<div class="container" id="textcontactmps">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">29 West 2th Street, <br> Sin Yway Twin Yangon</li>
							<li class="phone"><a href="tel://1234567920">+ 9794 5141 43</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@starenglish.com</a></li>
							<li class="url"><a href="http://freehtml5.co">starenglish</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box" >
					<h3>Get In Touch</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6" >
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="contact" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="contact"  class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text"  id="contact" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text"  id="contact" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message"  id="contact" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-success" id="contact">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
	{{-- <div id="map" class="fh5co-map">

    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.963198661146!2d96.12783871481813!3d16.828181688416056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194c994c98537%3A0x6f8b8fd3449b81be!2sStarfish+Education!5e0!3m2!1smy!2smm!4v1565343031962!5m2!1smy!2smm" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

    </div> --}}



	<div id="fh5co-register" style="background-image: url(../images/112.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="{{route('user.test')}}" class="btn btn-success btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>
@endsection
