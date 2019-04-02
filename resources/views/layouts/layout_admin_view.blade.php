<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css') }}">
<link rel="shortcut icon" href="{{  asset('/img/'.$maininfo['favicon']) }}" type="image/x-icon">
    <title>Admin Panel - @yield('title')</title>
</head>
<body>
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <div class="navigation">
        <div class="topnav">
            <a href="{{ route('messages') }}" class="btn btn-dark">Messages<span class="badge">{{ $nocheked }}</span></a>
            <a href="{{ route('products') }}" class="btn btn-dark">Products</a>
            <a href="{{ route('services') }}" class="btn btn-dark">Services</a>
            <a href="{{ route('info') }}" class="btn btn-dark">Info</a>
            <a href="{{ route('carousels') }}"class="btn btn-dark" title="">Carousel</a>
            <a href="{{ route('social') }}"class="btn btn-dark" title="">Social</a>
        </div>
    </div>
    <br>
    <div class="clear">
        @yield('body') 
    </div>
              
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>