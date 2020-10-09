@extends('admin/layouts/app')

@section('main-content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Questions</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
