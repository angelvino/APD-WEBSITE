

<!DOCTYPE HTML>
<html>
<head>
<title>Signup Form</title>
<!-- Custom Theme files -->
<link href="css/style-signup.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Trendy Signup Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->
<link href="css/font-awesome-signup.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--Google Fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wthree-dot">
	<h1>Signup</h1>
	<div class="profile">
		<div class="wrap">
			<div class="wthree-grids">
				<div class="content-left">
					<div class="content-info">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
									<li>
										<div class="w3layouts-banner-info">
											<p>Theorists say that sensory perception is located in ian isolated part of the brain - that is possibly in the Sylvian argin of the</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="agile-signin">
							<h4 onclick="window.location.href='login.html'">Already have an account <a href="#">Sign In</a></h4>
						</div>
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
						<h4>New Customer?</h4>
						<form action="dbcreate.php" method="POST">
							<input type="text" name="firstname" placeholder="First Name" required="">
							<input type="text" name="lastname" placeholder="Last Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="Password" placeholder="Password" required="">
							<input type="password" name="confirm_Password" placeholder="Confirm Password" required="">
							<input type="submit" class="btn" name="submit" value="submit">
						</form>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p><a href=""></a></p>
			</div>
		</div>
	</div>
</div>
<script src="js/responsiveslides.min.js"></script>
									<script>
										
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
									<!--banner Slider starts Here-->
</body>
</html>

