@extends('user/layouts/app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Testimonial Carousel with Quote Icon</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 70px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #1c47e3;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel .carousel-item {
	color: #999;
	overflow: hidden;
	min-height: 120px;
	font-size: 13px;
}
.carousel .media img {
	width: 80px;
	height: 80px;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 0 15px 0 60px ;
	position: relative;
}
.carousel .testimonial::before {
	content: "\201C";
	font-family: Arial,sans-serif;
	color: #e2e2e2;
	font-weight: bold;
	font-size: 68px;
	line-height: 54px;
	position: absolute;
	left: 15px;
	top: 0;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #1c47e3;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 20px;
	height: 20px;
	border-radius: 50%;
	margin: 1px 3px;
	box-sizing: border-box;
}
.carousel-indicators li {
	background: #e2e2e2;
	border: 4px solid #fff;
}
.carousel-indicators li.active {
	color: #fff;
	background: #1c47e3;
	border: 5px double;
}
</style>
</head>
<body>
<div class="container-xl">
	<div class="row">
		<div class="col-sm-12">
			<h2>What <b>our customers</b> are saying</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
                            @foreach ($feedbacks as $feedback)

							<div class="col-sm-6">
								<div class="media">
									<img src="{{$feedback->profile}}" class="mr-3" alt="">
									<div class="media-body">
										<div class="testimonial">

                                        <h3 class="overview">{{$feedback->name}}</h3>
                                         <p>{{$feedback->message}}</p>
										</div>
									</div>
								</div>
							</div>


                            @endforeach
                        </div>
					</div>
					<div class="carousel-item">
						<div class="row">
                              @foreach ($feedbacks as $feedback)
							<div class="col-sm-6">
								<div class="media">
										<img src="{{$feedback->profile}}" class="mr-3" alt="">
									<div class="media-body">
										<div class="testimonial">

                                            <h3 class="overview">{{$feedback->name}}</h3>
                                            <p>{{$feedback->message}}</p>

										</div>
									</div>
								</div>
                            </div>
                                @endforeach

						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
                             @foreach ($feedbacks as $feedback)
							<div class="col-sm-6">
								<div class="media">
									<img src="{{$feedback->profile}}" class="mr-3" alt="">
									<div class="media-body">
										<div class="testimonial">

                                            <h3 class="overview">{{$feedback->name}}</h3>
                                            <p>{{$feedback->message}}</p>
										</div>
									</div>
								</div>
                            </div>
                             @endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>


 <div class="container p-5 ">

    <div class="card card-success " >
        <div class="card-header text-center" id="card" >
                <h3 class="card-title">Please give me feedbacks</h3>
                </div>
                    <div class="container p-5 col-12 shadow rounded">
                    <form  method="post" action="{{route('admin.feedback.store')}}"enctype="multipart/form-data">
                        	@csrf
                        <div class="form-group font">
                            <label for="name">Name</label>
                            <input type="text" class="form-control  p-4 col-12" id="text" name="name"placeholder="Enter your Name Here " required>
                        </div>

                         <div class="form-group font">
                            <label for="activity"> Message</label>
                            <textarea name="message" class="form-control" rows="6" id="text" placeholder="Enter your Feedbacks Here " required></textarea>

                        </div>
                         <div class="form-group font">
                            <label for="profile">Student Profile</label>
                                <input type="file" class="form-control-file" id="profile"  name="profile">

                               </div>
                        <div class="font">
                        <button type="submit" id="card"class="  p-4 col-12" value="Submit Question" required >Submit</button>
                        </div>
                    </form>
                    </div>
                 </div>
    </div>
</div>

@endsection
