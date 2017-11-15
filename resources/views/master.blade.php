<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('include.head')

<body>

@include('include.nav')
     @yield('content')
@include('include.footer')

</body>
</html>