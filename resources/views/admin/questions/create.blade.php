@extends('user/layouts/app')

@section('content')
<div class="row justify-content-center">
          <div class="col-lg-8 mb-5" >

          <form action="{{route('admin.question.store')}}" method="post">

            @csrf

              <div class="form-group row ">
                <div class="col-12">
                  <textarea name="description" class="form-control " placeholder="Enter your question here" id="editor"cols="30" rows="10" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-4 ml-auto">
                  <input type="submit" class="btn btn-block btn-success text-white py-2 px-5" value="Submit Question" required>
                </div>
              </div>
            </form>
          </div>

</div>
@endsection
