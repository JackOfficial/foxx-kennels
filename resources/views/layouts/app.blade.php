
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Market - Premium Multipurpose HTML5/CSS3 Theme</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="{{ asset('front/ico/favicon.png') }}">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('front/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('front/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('front/css/themecss/lib.css') }}" rel="stylesheet">
	<link href="{{ asset('front/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="{{ asset('front/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/themecss/so-categories.css') }}" rel="stylesheet">
	<link href="{{ asset('front/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
	<link href="{{ asset('front/css/header6.css') }}" rel="stylesheet">
	<link href="{{ asset('front/css/footer3.css') }}" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('front/css/home6.css') }}" rel="stylesheet">
	
	<link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
	

</head>

<body class="common-home res layout-home6">

	
    <div id="wrapper" class="wrapper-full banners-effect-7">
	
	
	<!-- Header Container  -->
	<header id="header" class="variantleft type_6">
		
		<!-- Header Top -->
		<div class="header-top compact-hidden">
			<div class="container">
				<div class="row">
					<div class="header-top-left form-inline col-sm-5 col-xs-12 compact-hidden">
						<div class="form-group languages-block ">
							<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<img src="{{ asset('front/image/demo/flags/gb.png') }}" alt="English" title="English">
									<span class="">English</span>
									<span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="index.html"><img class="image_flag" src="{{ asset('front/image/demo/flags/gb.png') }}" alt="English" title="English" /> English </a></li>
								</ul>
							</form>
						</div>

						<div class="form-group currencies-block">
							<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu btn-xs">
									<li> <a href="#">(€)&nbsp;Euro</a></li>
									<li> <a href="#">(£)&nbsp;Pounds	</a></li>
									<li> <a href="#">($)&nbsp;US Dollar	</a></li>
									<li> <a href="#">(Frw)&nbsp;Francs	</a></li>
								</ul>
							</form>
						</div>
					</div>
					<div class="header-top-right collapsed-block text-right  col-sm-7 col-xs-12 compact-hidden">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock-1">
							<ul class="top-link list-inline">
								<li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="wishlist"><i class="fa fa-heart" ></i> My Wish List</a></li>
								<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>
								@guest
@if (Route::has('login'))
								<li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign In</a></li>
								@elseif(Route::has('register'))
								<li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign Up</a></li>
								@endif			
							@else
							<li>
								<div class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">
									 <span><i class="fa fa-user"></i> {{ Auth::user()->name }}</span> 
									</a>
									<div class="dropdown-menu">
									  <a class="dropdown-item text-dark" href="{{route('account')}}">My foxx-kennels</a>
									  <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
									  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
									</div>
								  </div>
							</li>	
							@endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Header Top -->

		<!-- Header center -->
		<div class="header-center">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
						<a href="index.html"><img src="{{ asset('front/image/demo/logos/logo.png') }}" title="Your Store" alt="Your Store"></a>
					</div>
					<!-- //end Logo -->
					
					<!-- Search -->
					<div id="sosearchpro" class="col-md-5 col-sm-7 search-pro">
						<form method="GET" action="index.html">
							<div id="search0" class="search input-group">
								<div class="select_category filter_type icon-select">
									<select class="no-border" name="category_id">
										<option value="0">All Categories</option>
										<option value="78">Apparel</option>
										<option value="77">Cables &amp; Connectors</option>
										<option value="82">Cameras &amp; Photo</option>
										<option value="80">Flashlights &amp; Lamps</option>
										<option value="81">Mobile Accessories</option>
										<option value="79">Video Games</option>
										<option value="20">Jewelry &amp; Watches</option>
										<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
										<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
										<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
									</select>
								</div>

								<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
								<span class="input-group-btn">
								<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<input type="hidden" name="route" value="product/search">
						</form>
					</div>
					<!-- //Search -->
					
					<!-- Main Menu -->
					<div class="phone-contact col-md-2  hidden-md hidden-sm hidden-xs">
							<div class="inner-info">
								<strong>Call us Now:</strong><br>
								<span>Toll free:  0123-456-789</span>
							</div>
					</div>
					<!-- //Main Menu -->

					<!-- Shopping Cart -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 shopping_cart pull-right">
						<!--cart-->
						<div id="cart" class="btn-group btn-shopping-cart">
							<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
								<div class="shopcart">
									<span class="handle pull-left"></span>
									<span class="title">Shopping Cart</span>
									<p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p>
								</div>
							</a>

							<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
								<li>
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="text-center" style="width:70px">
													<a href="product.html"> <img src="{{ asset('front/image/demo/shop/product/resize/2.jpg') }}" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
												</td>
												<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
												<td class="text-center"> x1 </td>
												<td class="text-center"> $1,202.00 </td>
												<td class="text-right">
													<a href="product.html" class="fa fa-edit"></a>
												</td>
												<td class="text-right">
													<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
												</td>
											</tr>
											<tr>
												<td class="text-center" style="width:70px">
													<a href="product.html"> <img src="{{ asset('front/image/demo/shop/product/resize/3.jpg') }}" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
												</td>
												<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
												<td class="text-center"> x1 </td>
												<td class="text-center"> $60.00 </td>
												<td class="text-right">
													<a href="product.html" class="fa fa-edit"></a>
												</td>
												<td class="text-right">
													<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<li>
									<div>
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="text-left"><strong>Sub-Total</strong>
													</td>
													<td class="text-right">$1,060.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Eco Tax (-2.00)</strong>
													</td>
													<td class="text-right">$2.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>VAT (20%)</strong>
													</td>
													<td class="text-right">$200.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Total</strong>
													</td>
													<td class="text-right">$1,262.00</td>
												</tr>
											</tbody>
										</table>
										<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
									</div>
								</li>
							</ul>
						</div>
						<!--//cart-->
					</div>
					<!-- //Shopping Cart -->
				</div>

			</div>
		</div>
		<!-- //Header center -->

		<!-- Header Bottom -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<!-- Sidebar menu -->
					<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12  ">
						<div class="responsive so-megamenu ">
							<div class="so-vertical-menu no-gutter compact-hidden">
								<nav class="navbar-default">
									<div class="container-megamenu vertical">
										<div id="menuHeading">
											<div class="megamenuToogle-wrapper">
												<div class="megamenuToogle-pattern">
													<div class="container">
														<div>
															<span></span>
															<span></span>
															<span></span>
														</div>
														All Categories							
													</div>
												</div>
											</div>
										</div>
										<div class="navbar-header">
											<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
											
											</button>
											All Categories		
										</div>
										<div class="vertical-wrapper" style="display: none;">
											<span id="remove-verticalmenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu">
														<li class="item-vertical style1 with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<img src="{{ asset('front/image/theme/icons/9.png') }}" alt="icon">
																<span>Automotive &amp; Motocrycle</span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Apparel</a>
																								<ul>
																									<li><a href="#">Accessories for Tablet PC</a></li>
																									<li><a href="#">Accessories for i Pad</a></li>
																									<li><a href="#">Accessories for iPhone</a></li>
																									<li><a href="#">Bags, Holiday Supplies</a></li>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Cables &amp; Connectors</a>
																								<ul>
																									<li><a href="#">Cameras &amp; Photo</a></li>
																									<li><a href="#">Electronics</a></li>
																									<li><a href="#">Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Camping &amp; Hiking</a>
																								<ul>
																									<li><a href="#">Earings</a></li>
																									<li><a href="#">Shaving &amp; Hair Removal</a></li>
																									<li><a href="#">Salon &amp; Spa Equipment</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#">Sports &amp; Outdoors</a></li>
																									<li><a href="#">Bath &amp; Body</a></li>
																									<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Bags, Holiday Supplies</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '18_46';">Battereries &amp; Chargers</a></li>
																									<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '18_45';">Headphones, Headsets</a></li>
																									<li><a href="#" onclick="window.location = '18_30';">Home Audio</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<img src="{{ asset('front/image/theme/icons/10.png') }}" alt="icon">
																<span>Electronic</span>
																
															</a>
														</li>
														<li class="item-vertical with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<span class="label"></span>
																<img src="{{ asset('front/image/theme/icons/3.png') }}" alt="icon">
																<span>Sports &amp; Outdoors</span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" data-subwidth="60" style="width: 540px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '81';" class="main-menu">Mobile Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '33_63';">Gadgets &amp; Auto Parts</a></li>
																									<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '17';">Bags, Holiday Supplies</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '18_46';" class="main-menu">Battereries &amp; Chargers</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '25_28';">Outdoor &amp; Traveling</a></li>
																									<li><a href="#" onclick="window.location = '80';">Flashlights &amp; Lamps</a></li>
																									<li><a href="#" onclick="window.location = '24_66';">Fragrances</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '25_31';" class="main-menu">Fishing</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '57_73';">FPV System &amp; Parts</a></li>
																									<li><a href="#" onclick="window.location = '18';">Electronics</a></li>
																									<li><a href="#" onclick="window.location = '20_76';">Earings</a></li>
																									<li><a href="#" onclick="window.location = '33_60';">More Car Accessories</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="row banner">
																				<a href="#">
																					<img src="{{ asset('front/image/demo/cms/menu_bg2.jpg') }}" alt="banner1">
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/2.png') }}" alt="icon">
																	<span>Health &amp; Beauty</span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-md-12">
																				<div class="row">
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Car Alarms and Security</a>
																									<ul>
																										<li><a href="#">Car Audio &amp; Speakers</a></li>
																										<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#">Headphones, Headsets</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="24" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
																									<ul>
																										<li>
																											<a href="#">Home Audio</a>
																										</li>
																										<li>
																											<a href="#">Helicopters &amp; Parts</a>
																										</li>
																										<li>
																											<a href="#">Outdoor &amp; Traveling</a>
																										</li>
																										<li>
																											<a href="#">Toys &amp; Hobbies</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Electronics</a>
																									<ul>
																										<li>
																											<a href="#">Earings</a>
																										</li>
																										<li>
																											<a href="#">Salon &amp; Spa Equipment</a>
																										</li>
																										<li>
																											<a href="#">Shaving &amp; Hair Removal</a>
																										</li>
																										<li>
																											<a href="#">Smartphone &amp; Tablets</a>
																										</li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																									<ul>
																										<li>
																											<a href="#">Flashlights &amp; Lamps</a>
																										</li>
																										<li>
																											<a href="#">Fragrances</a>
																										</li>
																										<li>
																											<a href="#">Fishing</a>
																										</li>
																										<li>
																											<a href="#">FPV System &amp; Parts</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">More Car Accessories</a>
																									<ul>
																										<li>
																											<a href="#">Lighter &amp; Cigar Supplies</a>
																										</li>
																										<li>
																											<a href="#">Mp3 Players &amp; Accessories</a>
																										</li>
																										<li>
																											<a href="#">Men Watches</a>
																										</li>
																										<li>
																											<a href="#">Mobile Accessories</a>
																										</li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																									<ul>
																										<li>
																											<a href="#">Gift &amp; Lifestyle Gadgets</a>
																										</li>
																										<li>
																											<a href="#">Gift for Man</a>
																										</li>
																										<li>
																											<a href="#">Gift for Woman</a>
																										</li>
																										<li>
																											<a href="#">Gift for Woman</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical css-menu with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	
																	<img src="{{ asset('front/image/theme/icons/2.png') }}" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="row">
																					<div class="col-sm-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Headphones, Headsets</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Home Audio</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Health &amp; Beauty</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/11.png') }}" alt="icon">
																	<span>Flashlights &amp; Lamps</span>
																	
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/4.png') }}" alt="icon">
																	<span>Camera &amp; Photo</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/5.png') }}" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/7.png') }}" alt="icon">
																	<span>Outdoor &amp; Traveling Supplies</span>
																</a>
															</li>
															<li class="item-vertical" style="display: none;">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/6.png') }}" alt="icon">
																	<span>Health &amp; Beauty</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/8.png') }}" alt="icon">
																	<span>Toys &amp; Hobbies </span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/12.png') }}" alt="icon">
																	<span>Jewelry &amp; Watches</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/13.png') }}" alt="icon">
																	<span>Bags, Holiday Supplies</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="{{ asset('front/image/theme/icons/13.png') }}" alt="icon">
																	<span>More Car Accessories</span>
																</a>
															</li>
															<li class="loadmore">
																<i class="fa fa-plus-square-o"></i>
																<span class="more-view">More Categories</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
							</div>
						</div>

					</div>
					
					<!-- Main menu -->
					<div class="megamenu-hori col-md-9 col-sm-6 col-xs-12 ">
						<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
											Navigation		
										</div>
										
										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="">
															<p class="close-menu"></p>
															<a href="/" class="clearfix">
																<strong>Home</strong>
																<span class="label"></span>
															</a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Services</strong>
																<img class="label-hot" src="{{ asset('front/image/theme/icons/hot-icon.png') }}" alt="icon items">
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; ">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-12">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="banner-effect.html">Vet Service</a></li>
																				<li><a class="subcategory_item" href="faq.html">Dog Training</a></li>
																				<li><a class="subcategory_item" href="sitemap.html">Dog Grooming</a></li>
																				<li><a class="subcategory_item" href="contact.html">Dog Walking</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Pet Sittig</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Pet Shop</strong>
																<span class="label"></span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img src="{{ asset('front/image/demo/cms/img1.jpg') }}" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img src="{{ asset('front/image/demo/cms/img2.jpg') }}" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img src="{{ asset('front/image/demo/cms/img3.jpg') }}" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img src="{{ asset('front/image/demo/cms/img4.jpg') }}" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Puppies for sale</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">German Shephards</a></li>
																							<li><a href="#"  class="main-menu">Rotweillers</a></li>
																							<li><a href="#"  class="main-menu">Golden Retrievers</a></li>
																							<li><a href="#"  class="main-menu">Mixed Breeds</a></li>
																							<li><a href="#"  class="main-menu">Local Breeds</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Pet Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Dog Foods</a></li>
																							<li><a href="#"  class="main-menu">Dog Kennels</a></li>
																							<li><a href="#"  class="main-menu">Hygene</a></li>
																							<li><a href="#"  class="main-menu">Sport &amp; Outdoor</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Earings</a></li>
																							<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																							<li><a href="#"  class="main-menu">Men Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#"  class="main-menu">Gift for Man</a></li>
																							<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																							<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>

														<li class="">
															<p class="close-menu"></p>
															<a href="/" class="clearfix">
																<strong>About Us</strong>
																<span class="label"></span>
															</a>
														</li>

														<li class="">
															<p class="close-menu"></p>
															<a href="/" class="clearfix">
																<strong>Contact Us</strong>
																<span class="label"></span>
															</a>
														</li>

														<li class="">
															<p class="close-menu"></p>
															<a href="/" class="clearfix">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>

														<li class="">
															<p class="close-menu"></p>
															<a href="/" class="clearfix">
																<strong>FAQs</strong>
																<span class="label"></span>
															</a>
														</li>

														<li class="pull-right hidden-md"><a href="#" title="Buy This Theme!"><strong>Special Offers!</strong></a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					<!-- //end Main menu -->
					
				</div>
			</div>

		</div>

	<!-- Navbar switcher -->
	<!-- //end Navbar switcher -->
	</header>
	<!-- //Header Container  -->

    @yield('content')
	

<!-- Footer Container -->
<footer class="footer-container type_footer3">
	<!-- Footer Top Container -->
	<section class="footer-top">
		<div class="container content">
			<div class="row">
				
				<div class="col-sm-6 col-md-3 box-information">
					<div class="module clearfix">
						<h3 class="modtitle">Information</h3>
						<div class="modcontent">
							<ul class="menu">
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="order-history.html">Order history</a></li>
								<li><a href="order-information.html">Order information</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 box-service">
					<div class="module clearfix">
						<h3 class="modtitle">Customer Service</h3>
						<div class="modcontent">
							<ul class="menu">
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="return.html">Returns</a></li>
								<li><a href="sitemap.html">Site Map</a></li>
								<li><a href="my-account.html">My Account</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 box-account">
					<div class="module clearfix">
						<h3 class="modtitle">My Account</h3>
						<div class="modcontent">
							<ul class="menu">
								<li><a href="#">Brands</a></li>
								<li><a href="gift-voucher.html">Gift Vouchers</a></li>
								<li><a href="#">Affiliates</a></li>
								<li><a href="#">Specials</a></li>
								<li><a href="#" target="_blank">Our Blog</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 collapsed-block ">
					<div class="module clearfix">
						<h3 class="modtitle">Contact Us	</h3>
						<div class="modcontent">
							<ul class="contact-address">
								<li><span class="fa fa-map-marker"></span> My Company, 42 avenue des Champs Elysées 75000 Paris France</li>
								<li><span class="fa fa-envelope-o"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
								<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789 <br>Phone 2: (123) 4567890</li>
							</ul>
						</div>
					</div>
				</div>
				
				<hr class="footer-lines">
				
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="module clearfix modLine">
						<h3 class="modtitle">Sign up for newsletter	</h3>
						<div class="modcontent align-center">
							<div class="subscribe-home">
								<form class="form subscribe" novalidate="novalidate" action="http://magento2.magentech.com/themes/sm_market/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
									<div class="input-group">
										<input name="email" type="email" class="form-control" onfocus="if(this.value=='Your email address') this.value='';" onblur="if(this.value=='') this.value='Your email address';" value="Your email address" data-validate="{required:true, 'validate-email':true}">
										<span class="input-group-btn">
											<button type="submit" class="button-search btn btn-primary" name="submit_search">Subscribe</button>
										</span>
									</div>
									
								</form>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="module clearfix modLine footer--social">
						<h3 class="modtitle">Follow Us</h3>
						<div class="modcontent">
							<div class="icons-social">
									
									<div class="list-inline">
										<a title="Facebook" href="http://www.facebook.com/MagenTech" target="_blank"> 
											<span class="fa fa-facebook icon-circled icon-color"></span> 
										</a>
									
										<a title="Twitter" href="https://twitter.com/magentech" target="_blank"> 
											<span class="fa fa-twitter icon-circled icon-color"></span> 
										</a>
								
										<a title="Google+" href="https://plus.google.com/u/0/+Smartaddons" target="_blank"> 
											<span class="fa fa-google-plus icon-circled icon-color"></span>
										</a>
									
										
										<a title="Pinterest" href="#" target="_blank"> 
											<span class="fa fa-instagram icon-circled icon-color"></span>
										</a>
										
										
									</div>
								
							</div>
							
						</div>
					</div>
				</div>
				<hr class="footer-lines footer-lines--bottom">
			</div>
		</div>
	</section>
	<!-- /Footer Top Container -->
	
	<!-- Footer Bottom Container -->
	<div class="footer-bottom-block ">
		<div class=" container">
			<div class="row">
				<div class="col-sm-5 copyright-text"> © 2016 Market. All Rights Reserved. </div>
				<div class="col-sm-7">
					<div class="block-payment text-right"><img src="{{ asset('front/image/demo/content/payment.png') }}" alt="payment" title="payment" ></div>
				</div>
				<!--Back To Top-->
				<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

			</div>
		</div>
	</div>
	<!-- /Footer Bottom Container -->
	
	
</footer>
<!-- //end Footer Container -->

</div>
<!-- Social widgets -->
<section class="social-widgets visible-lg">
<ul class="items">
	<li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
		<div class="tab-content">
			<div class="title">
				<h5>FACEBOOK</h5>
			</div>
			<div class="loading">
				<img src="{{ asset('front/image/theme/lazy-loader.gif') }}" class="ajaxloader" alt="loader">
			</div>
		</div>
	</li>
	<li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
		<div class="tab-content">
			<div class="title">
				<h5>TWITTER FEEDS</h5> 
			</div>
			<div class="loading">
				<img src="{{ asset('front/image/theme/lazy-loader.gif') }}" class="ajaxloader" alt="loader">
			</div>
		</div>
	</li>
	<li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
		<div class="tab-content">
			<div class="title">
				<h5>YouTube</h5>
			</div>
			<div class="loading"> <img src="{{ asset('front/image/theme/lazy-loader.gif') }}" class="ajaxloader" alt="loader"></div>
		</div>
	</li>
</ul>
</section>	<!-- End Social widgets -->


<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('front/js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/owl-carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/themejs/libs.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/unveil/jquery.unveil.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/datetimepicker/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/modernizr/modernizr-2.6.2.min.js') }}"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{ asset('front/js/themejs/application.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/themejs/homepage.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/themejs/so_megamenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/themejs/addtocart.js') }}"></script>	

</body>
</html>