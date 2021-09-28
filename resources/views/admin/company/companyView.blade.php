@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">View Company</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('company-details.index')}}" role='button' class='btn btn-secondary'>Add Company</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
	<div style='padding:10px 50px;'>
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Action</th>
                      <th>S.N</th>
                      <th>Company Name </th>
                      <th>Contact Details </th>
                      <th>Logo</th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($company as $company)
                    <tr>
                      <td style='width:200px'>
                        <a href="{{ route('company.edit',$company->id) }}" role='button' class='btn btn-success'>Edit</a>
                        <a href="{{ route('company.delete',$company->id) }}" role='button' class='btn btn-danger'>Delete</a>
                      </td> 
                      <td> {{ $company->id }}</td>
                      <td> {{ $company->name }}</td>
                      <td> {{ $company->contact_details  }}</td>
                      @if(isset($company->logo))
                      <td> <img src="{{ asset('images/'.$company->logo) }}" style="width: 50px; height: 50px;"> </td>
                      @else
                      <td style='width: 60px; height: 60px;'></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
	</div>
</div>
@endsection