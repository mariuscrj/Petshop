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
<section class="about">
	<div class="container">
		<div class="columns">
			<div class="column is-six">
				<h1 class="about__title">About Us</h1>
				<p class="about__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<a class="button" href="mailto:petshop@gmail.com">Contact us</a>
			</div>
			<div class="column is-six">
				<img class="about__image" src="/images/about.jpeg" alt="Cat-photo">
			</div>
		</div>
	</div>
</section>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>
</html>