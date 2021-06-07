<x-header>
</x-header>
<div>
<section>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Contact V10</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="temp/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="temp/css/util.css">
		<link rel="stylesheet" type="text/css" href="temp/css/main.css">
	<!--===============================================================================================-->
	</head>
	
	<body>
		<form method="POST" action="/contact-save" enctype="multipart/form-data>
			   @csrf
			<div class="container-contact100">
	
				<div class="wrap-contact100">
					<form class="contact100-form validate-form">
						@csrf
						<span class="contact100-form-title">
							Send Us A Message
						</span>
		
						<div class="wrap-input100 validate-input" data-validate="Please enter your name">
							<input class="input100" type="text" name="name" placeholder="Full Name">
							<span class="focus-input100"></span>
						</div>
		
						<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
							<input class="input100" type="text" name="email" placeholder="E-mail">
							<span class="focus-input100"></span>
						</div>
		
						<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
							<input class="input100" type="int" name="phone_number	" placeholder="Phone">
							<span class="focus-input100"></span>
						</div>
		
						<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
							<textarea class="input100" name="message" placeholder="Your Message"></textarea>
							<span class="focus-input100"></span>
						</div>
		
						<div class="container-contact100-form-btn">

							


							<button class="contact100-form-btn" type="submit" value="save">

								<span>
									<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
									Send
								</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</form>
	
	
	
	
	
		<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
		<script src="temp/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="temp/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="temp/vendor/bootstrap/js/popper.js"></script>
		<script src="temp/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="temp/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="temp/vendor/daterangepicker/moment.min.js"></script>
		<script src="temp/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="temp/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="temp/js/main.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-23581568-13');
	</script>
	
	</body>
	</html>
	

</section>

</div>