@extends('admin/layouts/app')

@section('main-content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-2">
          <div class="col-12">
            <h1 class="m-0 text-dark">
               Teacher Informations
            <a href="{{route('admin.teacher.create')}}" class="btn btn-primary">Create</a>
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
                  <th>Email</th>
                  <th>Phone</th>
                   {{-- <th>Photo</th> --}}
                  <th>Address</th>
                  <th>Degree</th>
                  <th>Activity</th>
                  <th>Classes</th>
                <th colspan="3">Actions</th>

                </tr>
                </thead>
                <tbody>
                        @php
                    $i = 1;
                    @endphp

                    @foreach($teachers as $teacher)
                 <tr>
                        <td>{{$i++}}</td>

                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->phone}}</td>
                         {{-- <td>{{$teacher->profile}}</td> --}}
                        <td>{{$teacher->address}}</td>
                        <td>{{$teacher->degree}}</td>
                        <td>{{$teacher->activity}}</td>
                        <td>{{$teacher->course}}</td>
                         <td><a href="{{route('admin.teacher.edit',$teacher->id)}}"class="btn btn-warning">Edit</a></td>
                            <td><form method="post"action="{{route('admin.teacher.destroy',$teacher->id)}}">
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
