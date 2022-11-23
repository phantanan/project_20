@extends('layouts.promote')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">เมนูอาหาร</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Menu Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">เมนูอาหาร</h1>
        </div>
        <div class="row">
            @foreach($foods  as $food)
            <div class="col-lg-6">
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('/template/admin/upload/food/'.$food->image)}}" alt="">
                        <h5 class="menu-price">฿{{$food->price}}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{$food->name}}</h4>
                        <p class="m-0">{{$food->detail}}</p>
                    </div>
                </div>
                </div>
                @endforeach
                
            
            
        </div>
    </div>
</div>
<!-- Menu End -->






@stop