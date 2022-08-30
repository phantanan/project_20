@extends('layouts.admin')
@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">เกี่ยวกับ</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item active" >about</li>
      <li class="breadcrumb-item active" aria-current="page">add</li>
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
                <a class="form-group font-weight-bold" href="./"><-กลับไป</a>
                    <div class="text-center">
                      <h1 class="h4 text-gray-700 mb-4 font-weight-bold">เพิ่มเกี่ยวกับ</h1>
                    </div>
                    <form class="font-weight-bold">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" placeholder="...">
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLastName" placeholder="...">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="..." placeholder="...">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="...">
                      </div>
                      <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="password" class="form-control" id="exampleInputPasswordRepeat" placeholder="...">
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