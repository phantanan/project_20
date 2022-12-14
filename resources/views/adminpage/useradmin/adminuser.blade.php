@extends('layouts.admin')
@section('content')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">User</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>User ID</th>
                                <th>name</th>
                                <th>username</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>email</th> 
                                <th>แก้ไขข้อมูล</th>
                                <th>ลบข้อมูล</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($read as $row)

                            <tr>
                                <td><a href="#">{{ $row->id}}</a></td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->username}}</td>
                                <td>{{ $row->phone}}</td>
                                <td>{{ $row->address}}</td>
                                <td>{{ $row->email}}</td>
                                <td><a href="{{ url('/admin/user/edit/'.$row->id) }}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                <td>
                                @if(Auth::user()->name == $row->name)

                                <a href="" class="btn btn-secondary">ลบไม่ได้</a>
                                @else
                                <a href="{{url('/admin/user/delete/'.$row->id)}}" class="btn btn-danger">ลบข้อมูล</a>
                                @endif
                                
                            </td>
                                
                            </tr>
                            @endforeach
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