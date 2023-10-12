@extends('app')

@section('content')


<div class="card mt-2">
    <div class="card-header d-flex">
        <h3 class="mr-auto text-info">USERS</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD USER</button>
    </div>
    <div class="card-body">

    </div>
</div>



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="userForm">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="phone_no">Phone</label>
                <input type="phone_no" class="form-control" name="phone_no">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button class="btn btn-info btn-block" type="submit">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>


@endsection