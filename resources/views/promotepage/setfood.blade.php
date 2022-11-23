@extends('layouts.promote')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">เช็ตอาหาร</h1>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Setfood Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">เช็ตไก่ทอด</h1>

        </div>
        <div class="row">
            @foreach($setfoods as $setfood)
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0 rounded-circle" src="{{asset('/template/admin/upload/setfood/'.$setfood->image)}}" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><p class="service-icon">฿{{$setfood->price}}</p>{{$setfood->name}}</h4>
                        <p class="m-0">{{$setfood->detail}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- setfood End -->





@stop