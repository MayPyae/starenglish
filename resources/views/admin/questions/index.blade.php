@extends('user/layouts/app')

@section('content')

<div class="col-lg-12">
                    @foreach ($questions as $question)
                    <div class="container col-6 p-2 mb-3 ">
                    <div class="d-flex tutorial-item mb-4 shadow font">
                        <div class="w-100">

                      <p class="p-4">{{$question->description}}</p>



                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="container">

                            <a href="{{route('admin.question.show',$question->id)}}" class="btn btn-success custom-btn">View</a>


                    </div>

                        </div>



                    </div>
                </div>
            </div>

                    @endforeach


@endsection
