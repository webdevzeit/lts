<p id="contact-anchor"></p>
<div class="contact-wrapper" >
	<h5>Our contacts</h5>
	<div class="contacts-text">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					<div class="block-info">
						<p>
							<div class="label">
								<img src="{{ asset('/img/workphone.png') }}" alt="">
							</div>
						</p>
						<p>{{ $maininfo['workphone'] }}</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					<div class="block-info">
						<p>
							<div class="label">
								<img src="{{ asset('/img/phone.png') }}" alt="">
							</div>
						</p>
						<p>
							<div class="text-for-contact">
								<p>{{ $maininfo['mobilephone'] }}</p>
							</div>
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					<div class="block-info">
						<p>
							<div class="label">
								<img src="{{ asset('/img/email.png') }}" alt="">
							</div>
						</p>
						<p>{{ $maininfo['email'] }}</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					<div class="block-info">
						<p>
							<div class="label">
								<img src="{{ asset('/img/address.png') }}" alt="">
							</div>
						</p>
						<p>{{ $maininfo['address'] }}</p>
					</div>
				</div>
			</div>		
		</div>
	</div>
	<h5>We are in social networks</h5>
		<div class="social">
			@foreach($links as $key =>$link)
					<a class="btn btn-outline-light" href="{!! $link['link'] !!}" title="">{{ $link['name'] }}</a>
			@endforeach
	</div>
	<h5>We are on the map</h5>
	<div class="map">
		{!! $maininfo['map'] !!}
	</div>
<p id="message-anchor"></p>
	<h5>Write us your wishes</h5>
	@if (session('status'))
				    <div class="alert alert-light">
				        {{ session('status') }}
				    </div>
				    @endif
	<div class="contact-us-block">
		<div class="form-message">
			<form action="/" method="post" >
				{{ csrf_field() }}
				<p><input type="text" name="name" placeholder="Name" ></p>
				<p><input type="text" name="phone" placeholder="Phone"></p>
				<p><input type="text" name="address" placeholder="Address"></p>
				<p><input type="email" name="email" placeholder="Email"></p>
				<p>
					<select name="subject" >
						<option selected="selected" disabled="disabled" value="">Subject</option>
						<option value="Product">Purchase Product </option>
						<option value="Service">Purchase Service</option>
						<option value="Other">Other</option>
					</select>
				</p>
				<p><textarea id="editor" name="message"></textarea></p>
				<p><input id="send-message" type="submit" name="submit" value="Send Message"></p>
			</form>
		</div>
	</div>
	<footer>
	 LiteSkyCMS
</footer>
</div>
