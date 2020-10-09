@extends('user/layouts/app')
@section('content')



	<div id="fh5co-course p-3 ">
		<div class="container  ">
             @if (session('message'))
              <div class="alert alert-success">{{session('message')}}</div>

                @endif
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Career Opportunities</h2>

				</div>
			</div>
			<div class="row ">
				<div class="col-md-12 animate-box shadow rounded mb-3">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(../images/30.jpeg);">
						</a>
						<div class="desc">
                            <h3><a href="#">General English Language Teacher <br>
                                (Full-time / Part-time posts ONLY)</a></h3>
                            <h3 class="font" >Requirements</h3>
                            <p class="font">1. Excellent English language skill (IELTS band 7 and above)<br>
                            2. Graduate<br>3. Preferable with CELTA or TESOL or other relevant English language Teaching certificates<br>
                            4. At least 2 years of teaching experience with Communicative Teaching Method<br>
                            5. Enthusiastic, Responsible, Flexible, Good professional work ethics, Positive attitude<br>
                            6. Willing to learn, give the best and ability to work with team</p>
                                <h3 class="font" >Salary</h3>
                                <p class="font">Attractive salary + Bonus<br>
                                    Send your CV to info@starenglish.com</p>
                                    <h3 class="font" >Remark</h3>
                                    <p class="font">Provide two recent employer references<br>
                                    Only shortlisted candidates will be contacted for the interviews.</p>
                                    <span><a href="{{route('admin.personal.create')}}" class="btn btn-success btn-sm btn-course" id="card">Apply Job</a></span>
						</div>
					</div>
				</div>


			</div>
		</div>
    </div>


@endsection
