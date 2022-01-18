<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="soucre/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="soucre/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="soucre/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="soucre/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="soucre/assets/dest/css/style.css">
	<link rel="stylesheet" href="soucre/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="soucre/assets/dest/css/huong-style.css">

</head>
<body>

	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 店住所</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 電話番号</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
						<li><a href="{{route('login')}}">こんにちは、{{Auth::user()->full_name}}</a></li>
						<li><a href="{{route('logout')}}">logout</a></li>
						@else
						<li><a href="{{route('signin')}}">create</a></li>
						<li><a href="{{route('login')}}">login</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="soucre/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/search">
					        <input type="text" value="" name="key" id="s" placeholder="検索..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					
					
					
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="soucre/assets/dest/images/products/cart/1.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="soucre/assets/dest/images/products/cart/2.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="soucre/assets/dest/images/products/cart/3.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="/index">HOME</a></li>
						<li><a href="/loai-san-pham">Product</a>
							
						</li>
						<li><a href="about.html">Introduce</a></li>
						<li><a href="{{route('lienhe')}}">Contact</a></li>	
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="rev-slider">
	@yield('content')
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

	

	<!-- include js files -->
	<script src="soucre/assets/dest/js/jquery.js"></script>
	<script src="soucre/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="soucre/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="soucre/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="soucre/assets/dest/vendors/animo/Animo.js"></script>
	<script src="soucre/assets/dest/vendors/dug/dug.js"></script>
	<script src="soucre/assets/dest/js/scripts.min.js"></script>
	<script src="soucre/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="soucre/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="soucre/assets/dest/js/waypoints.min.js"></script>
	<script src="soucre/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="soucre/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
