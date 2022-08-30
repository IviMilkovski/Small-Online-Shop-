<!DOCTYPE html>
<html lang="en">

@include('main.fixed.head')

<body>
@include('main.fixed.header')

@yield('content')

@include('main.fixed.footer')
@include('main.fixed.scripts')
@yield('script');
</body>
</html>
