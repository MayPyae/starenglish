@extends('admin/layouts/app')

@section('main-content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-2">
          <div class="col-12">
            <h1 class="m-0 text-dark">
               Personal Informations
            <a href="{{route('admin.personal.create')}}" class="btn btn-primary">Create</a>
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
                  <th>Address</th>
                  <th>Profile</th>
                  <th>Cv</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                        @php
                    $i = 1;
                    @endphp

                    @foreach($personals as $personal)
                 <tr>
                        <td>{{$i++}}</td>

                        <td>{{$personal->name}}</td>
                        <td>{{$personal->email}}</td>
                        <td>{{$personal->phone}}</td>
                        <td>{{$personal->address}}</td>
                        <td>{{$personal->profile}}</td>
                        <td>{{$personal->cv}}</td>

                            <td><form method="post"action="{{route('admin.personal.destroy',$personal->id)}}">
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

