@extends('layouts.admin')
@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Admin</li>
      <li class="breadcrumb-item active" >User</li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
  </div>
  <!-- Register Content -->
  <div class="row justify-content-center">
    <div class="col-lg-12 mb-4">
      <div class="card shadow-sm my-0">
        <div class="card">
          <div class="row">
            <div class="col-lg-12">
              <div class="add-form">
                <a class="form-group font-weight-bold" href="{{route('adminpage.useradmin.adminuser')}}"><-กลับไป</a>
                    <div class="text-center">
                      <h1 class="h4 text-gray-700 mb-4 font-weight-bold">แก้ไข User</h1>
                    </div>
                    <form class="font-weight-bold" action="{{url('/admin/user/update/'.$useredit->id)}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputFirstName" value="{{$useredit->name}}">
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputLastName" value="{{$useredit->username}}">
                      </div>
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail" value="{{$useredit->phone}}">
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword" value="{{$useredit->address}}">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPasswordRepeat" value="{{$useredit->email}}">
                      </div>
              
                      <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-block">แก้ไขข้อมูล</button>
                      </div>
                    </form>

                    <div class="text-center">
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Register Content -->
</div>

@stop