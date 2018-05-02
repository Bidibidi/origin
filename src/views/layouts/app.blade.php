<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('bidibidi-origin::_particials._header')
@yield('style')
@yield('jsheader')
</head>
<body>
@include('bidibidi-origin::_particials._navbar')

<div class="container-fluid position-relative p-3">

@include('bidibidi-origin::_particials._messages')
       
@yield('bidibidicontent')
@include('bidibidi-origin::_particials._footer')

</div>

@yield('jsfooter')
</body>
</html>
