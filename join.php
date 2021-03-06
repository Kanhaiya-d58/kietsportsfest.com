﻿<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
	include('header.php');
	?>
<html lang="zxx">

<head>
	<title>Best Study an Education Category Bootstrap Responsive Website Template | Join Us :: w3layouts</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	
	<!-- banner -->
	<div class="inner_page_agile">

	</div>
	<!--//banner -->
	<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.html">Home</a>
					<span>| |</span>
				</li>
				<li>Join Us</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>A</span>dmission
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="register-form">
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input">
							<input type="text" placeholder="Your Name" name="Your name" required="">
						</div>
						<div class="styled-input">
							<input id="datepicker" placeholder="Birth Date" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<select class="category2" required="">
								<option value="">Gender</option>
								<option value="">Female</option>
								<option value="">Male</option>
								<option value="">Other</option>
							</select>
						</div>
						<div class="styled-input">
							<input type="email" placeholder="Your E-mail" name="Email" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Phone Number" name="Phone" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<select class="category2" required="">
								<option value="">Select Course</option>
								<option value="">Web Designing</option>
								<option value="">Web Technology </option>
								<option value="">PC Systems </option>
								<option value="">IT Foundations </option>
								<option value="">HR Management </option>
								<option value="">Modeling </option>
								<option value="">Basic Marketing</option>
							</select>
							<span></span>
						</div>
						<div class="styled-input">
							<div class="agileits_w3layouts_grid">
								<select class="category2" name="category1" required="">
									<option value="">Select Course Time</option>
									<option value="">Hours: 8am - 10am</option>
									<option value="">Hours: 10am - 12pm</option>
									<option value="">Hours: 12pm - 4pm</option>
									<option value="">Hours: 4pm - 7pm</option>
									<option value="">Hours: 7pm - 9pm</option>
								</select>
							</div>
						</div>
						<div class="styled-input">
							<label class="header">Your Address</label>
							<div class="">
								<input type="text" name="name" placeholder="Address" title="Please enter your Address" required="">
							</div>
							<div class="">
								<input type="text" name="name" placeholder="Line" title="Please enter your Line" required="">
							</div>
							<div class="">
								<input type="text" name="name" placeholder="City" title="Please enter your City" required="">
							</div>
							<div class="">
								<input type="text" name="name" placeholder="Zip Code" title="Please enter your Zip code" required="">
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>


	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->
	<?php
	include('footer.php');
	?>

</body>

</html>