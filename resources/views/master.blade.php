<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('include.head')

<body>
@include('include.nav')
<div class="container">

    @yield('content')

</div>
@include('include.footer')
</body>
</html>