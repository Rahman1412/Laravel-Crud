@extends('app')

@section('content')

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
  <strong>Success!</strong> {{Session::get('error')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<!-- The Modal -->
<div class="card mt-3">

      <!-- Modal Header -->
      <div class="card-header">
        <h4 class="modal-title">Add User</h4>
      </div>

      <!-- Modal body -->
      <div class="card-body">
        <form method="POST" action="{{ route('addUser') }}">
          @csrf
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" class="form-control" name="username" value="{{old('username')}}">
                @error('username')
                <label class='text-danger'>{{$message}}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                @error('email')
                <label class='text-danger'>{{$message}}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone_no">Phone</label>
                <input type="phone_no" class="form-control" name="phone_no" value="{{old('phone_no')}}">
                @error('phone_no')
                <label class='text-danger'>{{$message}}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}">
                @error('password')
                <label class='text-danger'>{{$message}}</label>
                @enderror
            </div>
            <button class="btn btn-info btn-block" type="submit">Submit</button>
        </form>
      </div>

</div>


@endsection