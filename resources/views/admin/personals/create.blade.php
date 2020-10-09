@extends('user/layouts/app')
@section('content')
<div class="container p-5 ">

    <div class="card card-success " >
        <div class="card-header text-center" id="card" >
                <h3 class="card-title">Personal Information Register</h3>
                </div>
                    <div class="container p-5 col-12 shadow rounded">
                    <form method="post" action="{{route('admin.personal.store')}}"enctype="multipart/form-data">
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
                            <label for="profile"> Profile</label>
                                <input type="file" class="form-control-file" id="profile"  name="profile">

                               </div>


                      <div class="form-group font">
                            <label for="cv"> CV</label>
                                <input type="file" class="form-control-file" id="cv"  name="cv">

                               </div>

                          <div class="form-group font">
                            <label for="address"> Address</label>
                            <textarea name="address" class="form-control" rows="6" id="text" name="address"placeholder="Enter your Address Here " required></textarea>

                        </div>




                    <div class="font">
                        <button onclick="myFunction()"  id="card" class="p-4 col-12" value="Submit Question" required>Submit</button>

                        <script>
                        function myFunction() {
                        alert("You are Success Full!");
                        }
                        </script>


                    </div>



                    </form>
                    </div>
                 </div>
    </div>
</div>

@endsection
