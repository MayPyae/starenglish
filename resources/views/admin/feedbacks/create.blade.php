@extends('user/layouts/app')
@section('content')

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
