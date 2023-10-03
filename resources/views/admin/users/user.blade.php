@extends('admin\admindashboard')
@section('content-Sec')
<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Users </h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> Name</th>
                  <th> Email </th>
                  <th>Created At</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as  $value)
                    
              
                <tr>                 
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->email }}</td>                
                  <td>{{ $value->created_at }}</td>
                  <td><a href="{{ route('user.delete',['id' => $value->id ]) }}" class="btn btn-danger">Delete</a></td>
                                   
                                   
                </tr>
                @endforeach
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection