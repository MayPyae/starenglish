@extends('admin/layouts/app')

@section('main-content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-2">
          <div class="col-12">
            <h1 class="m-0 text-dark">
               Personal Informations
            <a href="{{route('admin.feedback.create')}}" class="btn btn-primary">Create</a>
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
                  <th>Name</th>
                  <th>Message</th>
                  <th>Phone</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                        @php
                    $i = 1;
                    @endphp

                    @foreach($feedbacks as $feedback)
                 <tr>
                        <td>{{$i++}}</td>

                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->message}}</td>
                        <td>{{$feedback->profile}}</td>
                        <td><form method="post"action="{{route('admin.feedback.destroy',$feedback->id)}}">
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

@section('require-script')
<!-- DataTables -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <script>
      $(function() {
        $("#example1").DataTable();
      });
    </script>
@endsection
