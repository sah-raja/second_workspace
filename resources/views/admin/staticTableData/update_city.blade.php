@extends('layouts.admin')
@section('content')

<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Update City</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

    <!-- form for updating city -->
    <!-- Horizontal Form -->
	  <div style='margin:50px 100px;'>
            <div class="card card-info">
            <div class="card-header">
                <!-- <h3 class="card-title">Insert City</h3> -->
              </div>
              <!-- /.card-header -->
              <!-- session message -->
                @if (session('msg'))
                <div class="alert alert-secondary" style='margin:20px 80px;'>
                    {{ session('msg') }}
                </div>
                @endif
              <!-- form start -->
              <form method='post' action="{{ route('city-update', $city->id) }}">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="city" name='city' placeholder="Enter new name for city" value='{{$city->name}}'/>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <a href="{{ route('city-view') }}" role="button" class="btn btn-default float-right">See Cities</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
	  </div>
  <!-- ./col -->
    <div>
    </div>
  <!-- /.row -->

</div>

@endsection