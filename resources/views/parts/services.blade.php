	
			<!--Services-->
			<div id="services-anchor"></div>
				<h5>Our services</h5>
				<div class="services">
					<section>
						<div class="container">
							<div class="row justify-content-center">
@foreach($services as $key => $service)
			<div class="col-12 col-sm-2 col-md-2 col-lg-2" id="bblock-container" onclick="location.href='/service_view/{{ $service['id'] }}';">
									<div class="service-name">
											<p>{{ $service['name'] }}</p>
										</div>
									<div class="some-block-services">
										 <div class="bblock"><img src="{{ asset('img/'.$service['img']) }}" alt=""></div>
									</div>	
								</div>
@endforeach				
								</div>
							</div>
					</section>
				</div>
			<!--Services end-->
		</div>
		<!--Content end-->