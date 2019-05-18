<?php session_start(); ?>
<head>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<header class="header">
	<div class="header__container container">
		<a href="index.php"><img class="header__logo" src="images/logo.svg" alt="cat-and-dog-logo"></a>
		<div class="nav">
			<ul class="nav__content">
				<li class="nav__item">
					<a href="index.php" class="nav__link">home</a>
				</li>
				<li class="nav__item">
						<a href="about.php" class="nav__link">about</a>
				</li>
				<li class="nav__item">
						<a href="contact.php" class="nav__link">contact</a>
				</li>
				<li class="nav__item">
						<a href="shop.php" class="nav__link">shop</a>
				</li>
			</ul>
		</div>
		<?php if (isset($_SESSION['username'])) { ?>
			<div class="header__log">
				<form method="post" action="logout.php">
					<button value="submit" name="submit" class="header__button">Log out</button>
				<?php if(isset($_SESSION['admin'])) { ?>
					<a href="admin.php" class="header__button">admin</a>
				<?php } else { ?>
					<a href="cart.php" class="header__button">cart</a>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if (!isset($_SESSION['username'])) { ?>
			<a href="#" class="header__button js-login-trigger">login</a>
		<?php } ?>
	</div>
</header>
<div action="#" class="login js-login">
	<form class="form" action="login.php" method="post" enctype="multipart/form-data">
		<div class="form__field">
			<label class="form__label" for="user">Email</label>
			<input class="form__input" type="text" name="email" id="email" placeholder="Email">
		</div>
		<div class="form__field">
			<label class="form__label" for="password">Password</label>
			<input class="form__input" type="text" name="password" id="password" placeholder="Password">
		</div>
		<div class="form__button h-center"><button name="submit" type="submit" class="button">Login</button></div>
	</form>
	<span class="h-text-center">or</span>
	<a class="button" href="register.php">Register</a>
	<?php
		include 'connect.php';
		global $link;
	?>
</div>
<script src="js/login.js"></script>