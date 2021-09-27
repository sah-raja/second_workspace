@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Dashboard</h2>
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
  <!-- Horizontal Form -->
  <div style='padding-top:30px; padding-left:50px; padding-right:50px;'>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Company Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="" name="company_name" value="{{ $company->name }}" >
                    </div>
                  </div>
				          <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                    <select name="city" id="city">
                      @if(isset($city_selected->id))
                        <option selected>{{$city_selected->name}}</option>
                        @foreach($city as $record)
                          <option value='{{$record->id}}'>{{$record->name}}</option>
                        @endforeach
                      @else
                        <option selected value='null'>Choose...</option >
                        @foreach($city as $record)
                          <option value='{{$record->id}}'>{{$record->name}}</option>
                        @endforeach
                      @endif
						        </select>
                    </div>
                  </div>
				          <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                      <input type="text" class="" name="location" value="{{ $company->location }}">
                    </div>
                  </div>
				          <div class="form-group row">
                    <label for="contact" class="col-sm-2 col-form-label">Contact Details</label>
                    <div class="col-sm-10">
                      <input type="text" class="" name="contact_details" value="{{ $company->contact_details }}" >
                    </div>
                  </div>
				          <div class="form-group row">
                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                      @if(isset($company->logo))
						          <img src="{{ asset('images/'.$company->logo) }}" style="width:50px;height:50px;" alt="" >
                      <input type="file" name="logo"/>
                      @else
                      <input type="file" name="logo"/>
                      @endif
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
		</div>
</div>
@endsection