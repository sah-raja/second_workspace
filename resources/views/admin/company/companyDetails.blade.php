@extends('layouts.admin')

@section('content')
<div class='container-fluid'>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Add Company</h2>
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
	<div style='padding: 10px 50px;'>
            <div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Company Details</h3> -->
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('company-details.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Company Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="" name="company_name" value="">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
						<select name="city" id="city" > 
							<option selected value='null'>Choose...</option >
							@foreach($city as $cities)
								<option value="{{ $cities->id }}" >
								{{ $cities->name}}
							@endforeach
							</option>    
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                      <input type="text" class="" name="location">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Contact Details</label>
                    <div class="col-sm-10">
                      <input type="text" class="" name="contact_details" value="" >
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                      <input type="file" name="logo" >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <a href="{{ route('company.view')}}" role="button" class="btn btn-default float-right">See Companies</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
  </div>
</div>
@endsection