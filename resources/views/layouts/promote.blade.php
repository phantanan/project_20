<!doctype html>
<html>
<head>
   @include('includes.promote.head')
</head>

<body>


   <header>
       @include('includes.promote.header')
   </header>


   <div>
         
   @yield('content')
   
    </div>



   <footer class="row">
       @include('includes.promote.footer')
   </footer>






</body>
</html>