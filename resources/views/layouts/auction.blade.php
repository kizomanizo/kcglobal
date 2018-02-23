
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>KC Global Links</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Karibu mnadani, panda dau!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">STOO</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">ONGEA NASI</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">LUGHA <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">Swahili (SW)</a></li>
								<li><a href="#">English (EN)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">MALIPO <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">TSHS (Shs)</a></li>
								<li><a href="#">USD ($)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="./img/kc_logo_small.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Andika hapa utakacho">
							<select class="input search-categories">
								<option value="0">Vitu Vyote</option>
								<option value="1">Ujenzi</option>
								<option value="1">Jikoni</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">

						<!-- Account -->
						@guest
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">Ingia Ndani Sasa</strong><br>
							</div>
							<a href="{{ route('login') }}" class="text-uppercase">Ingia</a> / <a href="{{ route('register') }}" class="text-uppercase">Jiunge</a>
						</li>
						@else
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></strong>
							</div>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-circle-o"></i> Maelezo yangu</a></li>
								<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										<i class="fa fa-hand-paper-o"></i> Ondoka/Logout
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</li>
						@endguest
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">Oda yangu:</strong>
								<br>
								<span>45,000TShs</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">100,000Shs <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Tena mingi sana</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">100,000Shs <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Mboyoyo mingi</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">Oda yangu</button>
										<button class="primary-btn">Lipia <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="{{ url('/home') }}">Mwanzo</a></li>
						<li><a href="#">Fuatilia Oda</a></li>
						<li><a href="#">Ofa</a></li>
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Vitu <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner06.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Vifaa vya kielektroniki</h3>
												</div>
											</a>
											<hr>
										</div>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Aina zake</h3></li>
											<li><a href="#">Simu</a></li>
											<li><a href="#">Kompyuta</a></li>
											<li><a href="#">TV</a></li>
											<li><a href="#">Tablet</a></li>
											<li><a href="#">Muziki</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner07.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Ujenzi</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Aina zake</h3></li>
											<li><a href="#">Vifaa vya ufundi</a></li>
											<li><a href="#">Vifaa vya ndani</a></li>
											<li><a href="#">Vifaa vya kampuni</a></li>
											<li><a href="#">Mapambo</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner08.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Accessories</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Jikoni</h3></li>
											<li><a href="#">Majiko</a></li>
											<li><a href="#">Blenda</a></li>
											<li><a href="#">Sahani na Vikombe</a></li>
											<li><a href="#">Sufuria</a></li>
											<li><a href="#">Vijiko, Uma na Mwiko</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner09.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Bags</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Mavazi na Fasheni</h3></li>
											<li><a href="#">Nguo za kike</a></li>
											<li><a href="#">Nguo za kiume</a></li>
											<li><a href="#">Mabegi na Mikoba</a></li>
											<li><a href="#">Waleti na Miwani</a></li>
											<li><a href="#">Viatu na Raba</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Oda yako</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	@yield('content')

		<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/kc_logo_small.png" alt="KC logo">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Chaguo lako namba moja kwa kununua na kutuma bidhaa toka Uingereza(UK). Tunasafirisha bidhaa aina zote toka UK kuja Afrika kwa bei chee.</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Akaunti</h3>
						<ul class="list-links">
							<li><a href="#">Akaunti Yangu</a></li>
							<li><a href="#">Ninavyotamani</a></li>
							<li><a href="#">Linganisha</a></li>
							<li><a href="#">Lipia</a></li>
							<li><a href="#">Ingia</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Huduma kwa wateja</h3>
						<ul class="list-links">
							<li><a href="#">Kuhusu KC</a></li>
							<li><a href="#">Malalamiko</a></li>
							<li><a href="#">Melezo ya usafiri</a></li>
							<li><a href="#">Je Wajua?</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Kuwa karibu zaidi</h3>
						<p>Tafadhali ingiza email yako kupata ofa moto moto(hatutumi mara nyingi).</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Jiuge Nasi</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Author can't be removed. Template is licensed under CC BY 3.0. -->
						Halimiliki &copy;<script>document.write(new Date().getFullYear());</script> Haki zimehifadhiwa | Imeundwa na kukarabatiwa na <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://twitter.com/kizomanizo" target="_blank">Bw. Kizito</a>
						<!-- Link back to Author can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>