<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="{{ url('/category') }}"><img src="{{ asset('public/FrontEnd/images/woo1.jpg') }}" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ url('/category') }}">Clothing</a></li>
											<li><a href="{{ url('/category') }}">Wallets</a></li>
											<li><a href="{{ url('/category') }}">Footwear</a></li>
											<li><a href="{{ url('/category') }}">Watches</a></li>
											<li><a href="{{ url('/category') }}">Accessories</a></li>
											<li><a href="{{ url('/category') }}">Bags</a></li>
											<li><a href="{{ url('/category') }}">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ url('/category') }}">Jewellery</a></li>
											<li><a href="{{ url('/category') }}">Sunglasses</a></li>
											<li><a href="{{ url('/category') }}">Perfumes</a></li>
											<li><a href="{{ url('/category') }}">Beauty</a></li>
											<li><a href="{{ url('/category') }}">Shirts</a></li>
											<li><a href="{{ url('/category') }}">Sunglasses</a></li>
											<li><a href="{{ url('/category') }}">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ url('/womenwear') }}">Clothing</a></li>
											<li><a href="{{ url('/womenwear') }}">Wallets</a></li>
											<li><a href="{{ url('/womenwear') }}">Footwear</a></li>
											<li><a href="{{ url('/womenwear') }}">Watches</a></li>
											<li><a href="{{ url('/womenwear') }}">Accessories</a></li>
											<li><a href="{{ url('/womenwear') }}">Bags</a></li>
											<li><a href="{{ url('/womenwear') }}">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ url('/womenwear') }}">Jewellery</a></li>
											<li><a href="{{ url('/womenwear') }}">Sunglasses</a></li>
											<li><a href="{{ url('/womenwear') }}">Perfumes</a></li>
											<li><a href="{{ url('/womenwear') }}">Beauty</a></li>
											<li><a href="{{ url('/womenwear') }}">Shirts</a></li>
											<li><a href="{{ url('/womenwear') }}">Sunglasses</a></li>
											<li><a href="{{ url('/womenwear') }}">Swimwear</a></li>
										</ul>
									</div> 
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="{{ url('/womenwear') }}"><img src="{{ asset('public/FrontEnd/images/woo.jpg') }}" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="{{ url('/electronic') }}">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ url('/shortcode') }}">Short Codes</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ url('/contact') }}">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //banner-top -->