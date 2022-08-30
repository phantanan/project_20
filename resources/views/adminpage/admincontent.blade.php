@extends('layouts.admin')
@section('content')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">เนื้อหา</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">content</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold">เนื้อหา</h5><a href="..." class="btn btn-info"> + เพิ่มข้อมูล</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>content ID</th>
                                <th>image</th>
                                <th>name</th>
                                <th>detail</th>
                                <th>line</th>
                                <th>id user</th>
                                <th>แก้ไขข้อมูล</th>
                                <th>ลบข้อมูล</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">000000</a></td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td><a href="#" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                <td><a href="#" class="btn btn-danger">ลบข้อมูล</a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->



</div>
<!---Container Fluid-->


@stop