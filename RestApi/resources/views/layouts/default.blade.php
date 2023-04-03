<!doctype html>
<html>
<head>
   @include('includes.head')
</head>

<body>

   <header>
       @include('includes.nav-bar')
       @yield('banner')
       @yield('breadcrumbs')
       @yield('carousel')
   </header>

   <div>
           @yield('content')
   </div>

   
    @include('includes.footer')


</body>

    @include('includes.script')
</html>