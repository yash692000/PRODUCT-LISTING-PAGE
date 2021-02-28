<html>
<head>
	<title>Sign-in & Sign-up Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	
	<div class="container">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="Signin()">Sign in</button>
				<button type="button" class="toggle-btn" onclick="Signup()">Sign up</button>
			</div>
		
			<form id="Signin" class="input-group" action="validation.php" method="post">
				<input type="text" class="input-field" name="user" placeholder="Enter Username" required />
				<input type="password" class="input-field" name="password" placeholder="Enter Password" required />
				<input type="checkbox" class="check-box" /><span>Remember Me</span>
				<button type="submit" class="submit-btn">Log In</button>
			</form>

			<form id="Signup" class="input-group" action="registration.php" method="post">
				<input type="text" class="input-field" name="user" placeholder="Enter Username" required />
				<input type="password" class="input-field" name="password" placeholder="Enter Password" required />
				<input type="checkbox" class="check-box" required /><span>I agree to the terms & conditions</span>
				<button type="submit" class="submit-btn">Register</button>
			</form>
		</div>
	</div>


	
	<script>
		var x = document.getElementById("Signin");
		var y = document.getElementById("Signup");
		var z = document.getElementById("btn");

		function Signup() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function Signin() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}

	</script>
</body>
</html>