@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

  <!--Card content-->


  <div class="card-body d-sm-flex justify-content-between">

    <h4 class="mb-2 mb-sm-0 pt-1">
      <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
      <span>/</span>
      <span>Registered Users->Edit Roles</span>
    </h4>
  </div>

</div>
<!-- Heading -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}

                </div>

                @endif

                <h4>Current Role: {{ $user_roles->role_as }}</h4>
                <h5>
                    Current Status:
                    @if ($user_roles->isBan == '0')
                    <label class="py-2px-3 badge btn-primary">Un-Banned</label>
                     @elseif($user_roles->isBan == '1')
                    <label class="py-2px-3 badge btn-danger">Banned</label>

                    @endif
                </h5>
                <form action="{{ url('role-update/'.$user_roles->id) }}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{ $user_roles->name }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user_roles->email }}">
                    </div>
                    <div class="form-group">
                        <select name="roles" class="form-control">
                            <option value="">--Select Roles--</option>
                            <option value="">Default</option>
                            <option value="admin">Admin</option>
                            <option value="vendor">Vendor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="isBan" class="form-control">
                            <option value="">--Select Ban And UnBan--</option>
                            <option value="0">Un-Ban</option>
                            <option value="1">Ban Now</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
