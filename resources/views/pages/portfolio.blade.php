<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>{{config('app.name','Paying Guest')}} | Portfolio</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="whitebricks pg paying guest"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<!-- gallery  -->
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l bannerbg-w3l-inner">
		<!-- header -->
		<header>
			@include('layouts.header')
		<!-- navigation -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">District
							<span>Real Property</span>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						    aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="/home">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="/about">About Us</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									    aria-expanded="false">
										Dropdown
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="index.html">Services</a>
										<a class="dropdown-item" href="index.html">Pricings</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="about.html">Clients</a>
										<a class="dropdown-item" href="about.html">Our Agents</a>
									</div>
								</li>
								<li class="nav-item  active mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="/portfolio">Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/contact">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>
					<!-- //navigation -->
<!-- header div partial end tags					 -->
				</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-w3ltext about-w3bnr">
			<div class="container">
				<h1 class="text-white text-center">
					<a href="index.html">Home</a> / Portfolio</h1>
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- login -->
		<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form action="" method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Login</button>
							<p class="text-center pb-4">
								<a href="#">Forgot your password?</a>
							</p>
							<p class="text-center pb-4">
								Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
	<!-- register -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Register Now</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" name="text" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" name="text" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Register</button>
							<p class="text-center pb-4">
								<a href="#">By clicking Register, I agree to your terms</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//register-->
	<!-- //banner -->

	<!-- gallery -->
	<section class="wthree-row w3-gallery py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2">Portfolio</h3>
				<p>See Our Portfolio</p>
			</div>
			<ul class="portfolio-categ filter mb-5 pb-4 text-center border-bottom">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				<li class="cat-item-1">
					<a href="#" title="Category 1">Bedroom</a>
				</li>
				<li class="cat-item-2">
					<a href="#" title="Category 2">Bathroom</a>
				</li>
				<li class="cat-item-3">
					<a href="#" title="Category 3">Kitchen</a>
				</li>
				<li class="cat-item-4">
					<a href="#" title="Category 4">Living Room</a>
				</li>
				<li class="cat-item-5">
					<a href="#" title="Category 5">Office</a>
				</li>
				<li class="cat-item-6">
					<a href="#" title="Category 6">Pool</a>
				</li>
			</ul>
			<ul class="portfolio-area clearfix">
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
					<span class="image-block">
						<a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g2.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
					<span class="image-block">
						<a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
					<span class="image-block">
						<a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g4.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g5.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-6" data-type="cat-item-6">
					<span class="image-block">
						<a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g6.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
					<span class="image-block">
						<a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g7.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
					<span class="image-block">
						<a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g8.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-5" data-type="cat-item-5">
					<span class="image-block">
						<a class="image-zoom" href="images/g9.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g9.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
			</ul>
			<!--end portfolio-area -->
		</div>
		<!-- //gallery container -->
	</section>
	<!-- //gallery -->

	@include('layouts.footer')

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/district.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<!-- //Js files -->

</body>

</html>