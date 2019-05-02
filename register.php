<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/defaults.css">
		<link rel="stylesheet" href="css/about.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/helpers.css">
		<link rel="stylesheet" href="css/footer.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetShop</title>
    </head>
<body>

<!--header-->
<?php include 'layouts/header.php'; ?>
<!--header-->
<h1 class="title">Register</h1>
<div class="container--register">
	<form action="signup.php" class="form" method="post" enctype="multipart/form-data">
			<div class="form__field">
				<label class="form__label" for="user">Username</label>
				<input class="form__input" type="text" name="username" id="username" placeholder="Username">
			</div>
			<div class="form__field">
				<label class="form__label" for="password">Password</label>
				<input class="form__input" type="text" name="password" id="password" placeholder="Password">
			</div>
			<div class="form__field">
				<label class="form__label" for="mail">E-mail</label>
				<input class="form__input" type="text" name="email" id="email" placeholder="E-mail">
			</div>
			<button type="submit" class="button">Register</button>
	</form>
</div>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
<?php
	include 'connect.php';
	global $link;
?>
</body>
</html>