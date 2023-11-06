@extends('app')

@section('content')

<!-- If we are using return view method then we have to use this way to show message -->
<!-- @if(!empty($success))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <strong>Success!</strong> {{$success}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif -->

<!-- If we use return redirect method then we have to use this way to show message -->
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <strong>Success!</strong> {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<div class="card mt-2">
    <div class="card-header d-flex">
        <h3 class="mr-auto text-info">USERS</h3>
        <a type="button" href="{{url('create-user')}}" class="btn btn-primary">ADD USER</a>
    </div>

    <div class="card-body">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Phone_no</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>
          {{@$user->name}}
        </td>
        <td>
          {{@$user->email}}
        </td>
        <td>
          {{@$user->phone}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {{$users->links()}}
  </div>
    </div>
</div>
@endsection