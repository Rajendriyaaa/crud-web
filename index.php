<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="grid">
	<div action="" class="login-box">
		<h2 class="">Login</h2>
		<form method="post" action="login.php">
			<label for="name">
				<i></i>
			</label>
			<input class="input" type="text" name="username" placeholder="Username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label><br><br>
			<input type="password" name="password" placeholder="Password" required>
			<button type="submit" value="Login">Login</button>
		</form>
	</div>
	</div>
</body>
</html>