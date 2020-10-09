@extends('user/layouts/app')
@section('content')

<div class="container p-5 ">

    <div class="card card-success shadow" >
        <div class="card-header text-center " id="card">
                <h3 class="card-title">Teacher Information Register</h3>
                </div>
                    <div class="container p-5 col-12">
                    <form method="post" action="{{route('admin.teacher.store')}}"enctype="multipart/form-data">
                        	@csrf
                        <div class="form-group font">
                            <label for="name">Name</label >
                            <input type="text" class="form-control  p-4 col-12" id="text" name="name"placeholder="Enter your Name Here " required>
                        </div>
                        <div class="form-group font">
                            <label for="email" >Email address</label>
                            <input type="email " class="form-control p-4 col-12 "  aria-describedby="emailHelp" id="text" name="email"placeholder="Enter your Email Here " required>

                        </div>

                        <div class="form-group font">
                            <label for="phone">Phone</label>
                            <input type="integer" class="form-control  p-4 col-12" id="text" name="phone"placeholder="Enter your Phone Here " required>
                        </div>
                         <div class="form-group font">
                            <label for="degree">Degree</label>
                            <input type="text" class="form-control  p-4 col-12" id="text" name="degree" placeholder="Enter your Degree Here " required>
                        </div>
                        <div class="form-group font">
                            <div class="col-md-12">
                                <label>Courses</label><br>

                                    @foreach ($courses as $course)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="course"type="checkbox" id="course-{{$course->id}}" value="{{$course->id}}">
                                            <label class="form-check-label" for="course-{{$course->id}}">{{$course->name}}</label>
                                        </div>
                                    @endforeach

                            </div>
                        </div>
                        <div class="form-group font">
                            <label for="profile">Teacher Profile</label>
                                <input type="file" class="form-control-file" id="profile"  name="profile">

                               </div>
                        <div class="form-group font">
                            <label for="address"> Address</label>
                            <textarea name="address" class="form-control" rows="6" id="text"  placeholder="Enter your Address Here " required></textarea>

                        </div>
                         <div class="form-group font">
                            <label for="activity"> Activity</label>
                            <textarea name="activity" class="form-control" rows="6" id="text"  placeholder="Enter your Activity Here " required></textarea>

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
