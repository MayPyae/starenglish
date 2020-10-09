@extends('admin/layouts/app')

@section('main-content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
               Questions
            <a href="{{route('admin.question.create')}}" class="btn btn-primary">Create</a>
            </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Description</th>
                     <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                      @php
                    $i = 1;
                    @endphp
                  @foreach($questions as $question)
                <tr>
                     <td>{{$i++}}</td>

                     <td>{{$question->description}}</td>
                     <td><a href="{{route('admin.question.edit',$question->id)}}"class="btn btn-success">Edit</a></td>
                            <td><form method="post"action="{{route('admin.question.destroy',$question->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger"value="Delete">

                                </form>
                            </td>
                </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection

