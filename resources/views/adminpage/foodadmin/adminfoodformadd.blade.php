@extends('layouts.admin')
@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">อาหาร</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Admin</li>
      <li class="breadcrumb-item active">Food</li>
      <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                <a class="form-group font-weight-bold" href="{{route('adminpage.foodadmin.adminfood')}}"><-กลับไป</a>
                    <div class="text-center">
                      <h1 class="h4 text-gray-700 mb-4 font-weight-bold">เพิ่มเมนูอาหาร</h1>
                    </div>
                    <form class="font-weight-bold" method="POST" action="{{route('adminpage.foodadmin.adminfoodadd')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputFirstName" >
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputLastName">
                      </div>
                      <div class="form-group">
                        <label>Detail</label>
                        <input type="text" name="detail" class="form-control" id="exampleInputEmail">
                      </div>
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPassword">
                      </div>
                      <br>
                      <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">+ เพิ่มข้อมูล</button>
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