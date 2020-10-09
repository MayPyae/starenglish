@extends('user/layouts/app')
@section('content')

<div class="container p-2 mt-5 font " >

<div class="row p-3">
  <div class="col-sm-3">
    <div class="card ">
      <div class="card-body font shadow-lg">
        <h5 class="card-title">Less than 20 Marks</h5>
        <p class="card-text">If you get test result is less than 20 marks,you  must be attend in level One class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 1</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body  shadow-lg">
        <h5 class="card-title">More than 20 Marks</h5>
        <p class="card-text">If you get test result is more than 20 marks,you  must be attend in level Two class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 2</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body  shadow-lg">
        <h5 class="card-title">Less than 50 Marks</h5>
        <p class="card-text">If you get test result is less than 50 marks,you  must be attend in level Three class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 3</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body  shadow-lg">
        <h5 class="card-title">More than 50 Marks</h5>
        <p class="card-text">If you get test result is more than 50 marks,you success must be attend in level Four class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 4</a>
      </div>
    </div>
  </div>
</div>
<div class="row p-3">
  <div class="col-sm-3">
    <div class="card ">
      <div class="card-body font shadow-lg">
        <h5 class="card-title">Less than 70 Marks</h5>
        <p class="card-text">If you get test result is less than 70 marks,you  must be attend in level Five class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 5</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body  shadow-lg">
        <h5 class="card-title">More than 70 Marks</h5>
        <p class="card-text">If you get test result is more than 70 marks,you  must be attend in level Six class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 6</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body  shadow-lg">
        <h5 class="card-title">Less than 80 Marks</h5>
        <p class="card-text">If you get test result is more than 80 marks,you  must be attend in level Seven class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 7</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body  shadow-lg">
        <h5 class="card-title">More than 80 Marks</h5>
        <p class="card-text">If you get test result is more than 80 marks,you are must be attend in level Eight class.</p>
        <a href="#" class="btn btn-success" id="card">Go Level 8</a>
      </div>
    </div>
  </div>
</div>
<a href="{{route('admin.question.index')}}" class="btn btn-success btn-lg col-12 active" role="button" aria-pressed="true">Apply Test</a>
</div>

@endsection
