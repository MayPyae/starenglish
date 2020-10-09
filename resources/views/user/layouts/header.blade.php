
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-white m-0 ">
    <img src="../images/blackboard.png">
        <a class="navbar-brand  p-2 pt-4 font-weight-bold" href="{{route('user.index')}}" >STAR ENGLISH</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="font-size: 15px; ">
            <li class="nav-item  mr-3  {{Request::segment(2)=='index'? 'bg-success':''}}">
                <a class="nav-link"  href="{{route('user.index')}} " >Home </a>
            </li>
            <li class="nav-item mr-3  {{Request::segment(2)=='about'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.about')}}">About </a>
            </li>

            <li class="nav-item mr-3  {{Request::segment(2)=='course'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.course')}}">Courses</a>
            </li>
             <li class="nav-item mr-3  {{Request::segment(2)=='feedback'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.feedback')}}">Feedbacks</a>
            </li>
             <li class="nav-item mr-3  {{Request::segment(2)=='teacher'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.teacher')}}">Teacher</a>
            </li>
             <li class="nav-item mr-3  {{Request::segment(2)=='career'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.career')}}">Careers</a>
            </li>
              <li class="nav-item mr-3  {{Request::segment(2)=='contact'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.contact')}}">Contact</a>
            </li>
             <li class="nav-item mr-3  {{Request::segment(2)=='test'? 'bg-success':''}}">
                <a class="nav-link" href="{{route('user.test')}}">Test</a>
            </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item font " href="{{route('admin.teacher.create')}}">Teacher Login</a>
                    <a class="dropdown-item font" href="{{route('admin.student.create')}}">Student Login </a>
                     <a class="dropdown-item font " href="{{route('admin.dashboard.index')}}">Admin Login</a>

                    </div>
                </li>
             <div class="container">
                <li>
                  <a href="{{route('login')}}" class="nav-link">
                 @if (Auth::check())
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/user.png')}}" height="50px">
                        <div class="dropdown-menu"></a>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">

                         <img src="{{asset('images/user.png')}}" height="50px">
                                <div class="ml-1">
                                    <h5 class="mb-0">{{Auth::user()->name}} </h5>
                                        <p class="mb-0 text-dark">
                                               {{Auth::user()->email}}
                                        </p>

                                </div>
                             </div>
                        </a>




                        <a class="dropdown-item" >
                             <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                <button class="border-0 bg-transparent text-danger">Logout</button>

                            </form>
                        </a>
                        </div>
                    </li>

                  @else


                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item font " href="{{route('admin.teacher.create')}}">Teacher Login</a>
                    <a class="dropdown-item font" href="{{route('admin.student.create')}}">Student Login </a>

                    </div>
                     @endif
                     </div>

        </div>
</nav>

      </header>
