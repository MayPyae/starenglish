@extends('user/layouts/app')

@section('content')

   <aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(../images/7.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The StarEnglish of Education are high-quality realistic practice tests</h1>

									<p><a class="btn btn-success btn-lg" href="{{route('user.test')}}">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(../images/14.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The StarEnglish  of Education is extensive online study resources with many hours of additional content</h1>

									<p><a class="btn btn-success btn-lg btn-learn" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(../images/18.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We Help You to Learn New Things</h1>

									<p><a class="btn btn-success btn-lg btn-learn" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Course categories</h2>
				<p> We have eight different levels of English classes to make sure you learn well and effectively.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<img src="../images/one.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level One</a></h3>
							<p class="font">Teaches conversational English and basic grammar.Introduces the four key skills of English language learning.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<img src="../images/two.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Two</a></h3>
							<p class="font">Uses grammar in natural settings of communication.Develops the four key skills of English language learning.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<img src="../images/three.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Three</a></h3>
							<p class="font">Builds confidence in conversational English.Expands vocabulary in natural communication settings.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<img src="../images/four.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Four</a></h3>
							<p class="font">Develops the art of discussion.Integrates the 4 skills and grammar into meaningful communication.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
						<img src="../images/five.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Five</a></h3>
							<p class="font">Introduces note-taking during lectures.Develops Critical Thinking Skills through problem-solving and other group activities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
						<img src="../images/six.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Six</a></h3>
							<p class="font">Teaches writing a covering letter for a job application.Teaches letter and email writing, with appropriate levels of formality.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<img src="../images/seven.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Seven</a></h3>
							<p class="font">Adds hundreds of new words to an already extensive vocabulary.Introduces academic essay writing.Adds dozens of idioms and phrasal verbs.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
						<img src="../images/eight.png" alt="">
						</span>
						<div class="desc">
							<h3><a href="#">Level Eight</a></h3>
							<p class="font"> Improve your reading speed and understand the strategies to use for different question-types.Learn how to use a range of grammatical structures, discuss ideas and identify and correct pronunciation problems.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(../images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Foreign Followers</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Students Enrolled</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-bulb"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Classes Complete</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-head"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Certified Teachers</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

	<div id="fh5co-testimonial" style="background-image: url(../images/7.jpeg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Testimonials</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(../images/person1.jpg);"></div>
									<span>STARENGLISH Education <br><small>provides:</small></span>
									<blockquote>
										<p>&ldquo;Classroom-based test prep courses which utilize proven Kaplan methods and strategies.Extensive online study resources with many hours of additional content.High-quality realistic practice tests&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(../images/person2.jpg);"></div>
									<span>STARENGLISH <br><small>International</small></span>
									<blockquote>
										<p>&ldquo;Best Educational Platform Award EducationInvestor Asia. &rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(../images/person3.jpg);"></div>
									<span>STARENGLISH<br><small>China</small></span>
									<blockquote>
										<p>&ldquo;Top 10 Corporate Language Training Solution Providers, in China: ‘Learning & Development Solution Provider Awards’, ‘HR Excellence Center’ (HREC).&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-pricing" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Plan &amp; Pricing</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing pricing--rabten">
					<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
								 <!-- <div class="icon icon-user2"></div> -->
	                     <h3 class="pricing__title">Trial</h3>
	                     <!-- <p class="pricing__sentence">Single user license</p> -->
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>0
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">One Day Trial</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">Free 3 Lessons</li>
	                        <li class="pricing__feature">No Supporter</li>
	                        <li class="pricing__feature">No Tutorial</li>
	                        <li class="pricing__feature">No Ebook</li>
	                         <li class="pricing__feature">Limited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                  </div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
								<!-- <div class="icon icon-store"></div> -->
	                     <h3 class="pricing__title">Silver</h3>
	                     <!-- <p class="pricing__sentence">Up to 5 users</p> -->
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>79
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">One Year Standard Access</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">300+ Lessons</li>
	                        <li class="pricing__feature">Random Supporter</li>
	                        <li class="pricing__feature">View Only Ebook</li>
	                        <li class="pricing__feature">Standard Tutorials</li>
	                         <li class="pricing__feature">Unlimited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                 </div>
					</div>
					<div class="col-md-4 animate-box">
                  <div class="pricing__item">
                  	<div class="wrap-price">
                  		<!-- <div class="icon icon-home2"></div> -->
	                     <h3 class="pricing__title">Gold</h3>
	                     <!-- <p class="pricing__sentence">Unlimited users</p> -->
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>499
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">Life Time Access</li>
	                        <li class="pricing__feature">Unlimited All Courses</li>
	                        <li class="pricing__feature">7000+ Lessons &amp; Growing</li>
	                        <li class="pricing__feature">Free Supporter</li>
	                        <li class="pricing__feature">Free Ebook Downloads</li>
	                        <li class="pricing__feature">Premium Tutorials</li>
	                         <li class="pricing__feature">Unlimited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                  </div>
               </div>
            </div>
			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(../images/255.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="{{route('user.test')}}" class="btn btn-success btn-lg btn-reg" style="background-color: #1E8449 ">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-bg-section">

		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(../images/1.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(../images/21.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(../images/20.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(../images/4.png);"></a>
			</div>
		</div>
	</div>

@endsection
