@extends('user/layouts/app')
@section('content')


     <div class="site-section">
     <div class="container col-6">
      <div class="tutorial-item mb-4 shadow">

         <p class="p-5 font">
             {!!$question->description!!}
        </p>
      </div>

     @foreach ( $question ->answers()->latest()->get() as $answer)
          <div class=" tutorial-item mb-4 shadow">
                      <div class="container">

                      <p class="p-5">{!!$answer->description!!}</p>


                  <div class="d-flex justify-content-between align items-center ">
                   <div class="d-flex">

                       @can('update', $answer)
                             <a href="{{route('answer.edit',[$question->id,$answer->id])}}" class=" ml-3 mr-2">
                                <button class="btn btn-success custom-btn">Edit</button></a>
                       @endcan

                        @can('delete', $answer)
                            <form id="answer-delete-{{$answer->id}}" class="d-inline-block" action="{{route('answer.destroy',[$question->id,$answer->id])}}" method="POST">
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-danger custom-btn" type="button"
                          onclick="if(confirm('Are you sure you want to detete?')){
                            event.preventDefault();
                            document.getElementById('answer-delete-{{$answer->id}}').submit();
                          }else{
                            event.preventDefault();
                          }">
                          Delete
                        </button>
                      </form>
                        @endcan

                    </div>

                  </div>
                </div>
              </div>
     @endforeach
              <div class="tutorial-item ">
                <h3>Submit your answer!</h3>
              <form action="{{route('admin.answer.store',$question->id)}}" method="POST">
                @csrf

                  <div class="form-group font">
                    <textarea name="description" id="text"class="form-control" rows="6" placeholder="Type your Answer here!"></textarea>
                  </div>
                  <div class="d-flex col-12 ">
                    <input type="submit" class="btn btn-success ml-auto" value="Submit">
                  </div>
                </form>
              </div>
        </div>
     </div>
 </div>
@endsection
