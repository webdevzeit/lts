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

<link rel="stylesheet" type="text/css" href="{{ asset('/css/style_main.css') }}">
<link rel="shortcut icon" href="" type="image/x-icon">
    <script type="text/javascript" src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/main.js')  }}"></script>
	<title>Add Link</title>
</head>

<body>
	<div class="add-wrapper" id="form-wrapper">
<span class="flated_span"><a href="{{ route('admin_panel') }}" class="btn btn-outline-light" ">Admin Panel</a></span>
		
	<div class="form-group row" id="form">
		 <form action=" {{ route('add_link') }}" method="post" >
		 	{{ csrf_field() }} 
								<div class="form-group">
								   <input type="name" name="name" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
								   <input type="text" name="link" class="form-control"  placeholder="Link">
								</div>
								<div class="form-group">
									 <button type="submit" id="send_message" class="btn btn-outline-light">Add  Link</button>
								</div>
								  
								</form>
	</div>

</div>
</body>
</html>