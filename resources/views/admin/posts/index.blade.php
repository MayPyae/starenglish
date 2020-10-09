@extends('admin/layouts/app')

@section('main-content')

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
                  <th>User_id</th>
                  <th>Question_id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      @php
                    $i = 1;
                    @endphp
                  @foreach($answers as $answer)
                <tr>
                     <td>{{$i++}}</td>

                     <td>{{$answer->description}}</td>
                     <td>{{$answer->user_id}}</td>
                       <td>{{$answer->question_id}}</td>
                    <td><form method="post"action="{{route('admin.answer.destroy',$answer->id)}}">
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
