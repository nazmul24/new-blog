@extends('admin.master')
@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Text Editors
  <small>Advanced form element</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Editors</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Admin</h3>
        </div>
        @include('admin.includes.messages')
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('user.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-md-offset-3 col-md-6">
                <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">
                    <label><input type="checkbox" name="status" @if (old('status') == 1)
                      checked
                    @endif value="1">Status</label>
                  </div>
                </div>

                <div class="form-group">
                  <label>Assign Role</label>
                  <div class="row">
                  @foreach($roles as $role)
                  <div class="col-lg-3">
                  <div class="checkbox">
                    <label><input type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}</label>
                  </div>                   
                  </div>
                  @endforeach
                </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-warning" href="{{ route('user.index') }}">Back</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </form>
      </div>
      
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->
@endsection