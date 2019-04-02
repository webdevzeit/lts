<div class="wrapper" >
		<!--Content-->
		<div id="product-anchor"></div>
		<h5>Our goods</h5>
		<div class="content">
			<!--Products-->
			<div class="product-list">
				<section id="list">
					<div class="container">
						<div class="row">
@foreach($products as $key=> $product)
							<div class="col-12 col-sm-6 col-md-4 col-lg-3" id="product-card">
								<div class="some-block">
									<div class="product_img_block">
										<img src="{{ asset('img/'.$product['img']) }}" alt="">
									</div>
									<div class="product_info">
										<p>{{ $product['name'] }}</p>
										<p>{{ $product['preview'] }}</p>
										<p>{{ $product['price'] }} AZN</p>
										<div class="product_link">
										<a class="btn btn-outline-info" id="view-button" href="{!! route('view_product',['id' =>$product['id']]) !!}" role="button">View</a>
									</div>
									</div>
								</div>
							</div>
@endforeach			
						</div>
					</div>
				</section>
			<p id="services-anchor"></p>
			</div>
			<!--Products end-->