<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.html" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">ร้านไก่ทอดหาดใหญ่</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link active">หน้าแรก</a>
                <a href="about.html" class="nav-item nav-link">เกี่ยวกับ</a>
                <a href="service.html" class="nav-item nav-link">เพิ่มเติม</a>
                <a href="menu.html" class="nav-item nav-link">ติดต่อ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">เมนูอาหาร</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="reservation.html" class="dropdown-item">รายการอาหาร</a>
                        <a href="testimonial.html" class="dropdown-item">เช็ตอาหาร</a>
                    </div>
                </div>
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/admin/home') }}" class="nav-item nav-link">admin</a>
                @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                @endif
                @endauth
                @endif

            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->