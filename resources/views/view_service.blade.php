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
<link rel="stylesheet" type="text/css" href="{{ asset('/css/view.css') }}">
<link rel="shortcut icon" href="{{  asset('/img/'.$maininfo['favicon']) }}" type="image/x-icon">
	<title>{{ $service['name'] }}</title>
</head>
<body>
@include('parts/preloader')
<div class="back-button">
			<a class="btn btn-outline-light" href="/#services-anchor">Back</a>
		</div>
		<div class="wrapper">
			<div class="container">
		  <div class="block">
		  		<div class="product-img">
		  			<img src="{{ asset('/img/'.$service['img']) }}" alt="">
		  		</div>
		  </div>
		  <div class="block">
		  	<h3>{{ $service['name'] }}</h3>
		  	<div class="discription">
				  	<h4>Discription for {{ $service['name'] }}</h4>
				  	{!! $service['discription'] !!}
		  	</div>
		  </div>
	</div>	
			
		</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/../js/main.js"></script>
</body>
</html>