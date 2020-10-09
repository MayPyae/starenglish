@extends('user/layouts/app')

@section('content')
    <aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(../images/12.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">STARENGLISH</h1>
									<h1>Our Courses</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>



	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Courses</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(../images/13.jpeg);">
						</a>
						<div class="desc">
							<h3><a href="#">English-Only Environment</a></h3>
							<p class="font">Our method is focused on confident communication in English, encouraging you to practice speaking and using English in conversations as soon as you start. Odit ab aliquam dolor eius.</p>
							<span><a href="{{route('user.test')}}" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(../images/6.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Flexible Learning</a></h3>
							<p class="font">Learn anytime, anywhere, on any device with our award-winning technology platform.Videos, interactive activities, digital student workbooks with center-based classes and events for the best English learning experience.</p>
							<span><a href="{{route('user.test')}}" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(../images/8.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Guaranteed Progress</a></h3>
							<p class="font">We provide you with sophisticated systems and personalized learning plans aligned to global standards. You get the study habits and routines that you need to achieve your goals. </p>
							<span><a href="{{route('user.test')}}" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(../images/1.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Online Class</a></h3>
							<p class="font">Join our teachers for free live and interactive practice sessions on Facebook throughout the year. Make sure you check the schedule of sessions by clicking here Facebook Fanpage/Events.</p>
							<span><a href="{{route('user.test')}}" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-register" style="background-image: url(../images/26.jpeg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-success btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>

@endsection
