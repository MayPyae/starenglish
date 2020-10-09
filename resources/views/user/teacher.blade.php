@extends('user/layouts/app')


@section('content')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(../images/14.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">STARENGLISH</h1>
									<h1>Our Teachers</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-staff">
		<div class="container">
			<div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-md-3 text-center">
					<div class="staff">
                        <div class="staff-img" id="imageprofile">
                            <img src="{{$teacher->profile}}">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
                    <span>{{$teacher->name}}</span>
                        <h4><a href="#">{{$teacher->email}}</a></h4>
                        <h2><a href="#">{{$teacher->degree}}</a></h2>
						<p id="teachertext">{{$teacher->activity}}</p>
					</div>
				</div>
                @endforeach


			</div>
		</div>
	</div>



	<div id="fh5co-register" style="background-image: url(../images/233.jpg);">
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
