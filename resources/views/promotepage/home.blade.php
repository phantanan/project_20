@extends('layouts.promote')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="template/promote/img/carousel-3.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="display-1 text-white m-0">Welcome</h1>
                </div>
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a> -->
    </div>
</div>
<!-- Carousel End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">เมนูลดราคา</h1>

        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item">
                <img class="img-fluid" src="template/promote/img/set1.png" alt="">
            </div>
            <div class="testimonial-item">
                <img class="img-fluid" src="template/promote/img/set2.png" alt="">
            </div>
            <div class="testimonial-item">
                <img class="img-fluid" src="template/promote/img/set2.png" alt="">
            </div>
            <div class="testimonial-item">
                <img class="img-fluid" src="template/promote/img/set1.png" alt="">
            </div>
            <div class="testimonial-item">
                <img class="img-fluid" src="template/promote/img/set2.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->

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
</div>
<!-- Menu End -->


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