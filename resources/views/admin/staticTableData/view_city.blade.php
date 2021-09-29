@extends('layouts.admin')
@section('content')

<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">View City</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('city-add')}}" role='button' class='btn btn-secondary'>Add City</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- table for viewing city -->
  <div style='padding:20px 90px;'>
    @if (session('msg'))
      <div class="alert alert-primary">
        {{ session('msg') }}
      </div>
    @endif
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">City Details</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>City</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($city as $record)
                      <tr>
                        <td>{{$record->name}}</td>
                        <td>
                          <a href="{{ route('city-edit', $record->id) }}" role='button' class='btn btn-success'>Update</a>
                          <a href="{{ route('city-delete', $record->id) }}" role='button' class='btn btn-danger'>Delete</a>
                        </td>
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
  <!-- ./col -->
    <div>
    </div>
  <!-- /.row -->

</div>

@endsection