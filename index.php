<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/defaults.css">
		<link rel="stylesheet" href="css/hero.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/offers.css">
		<link rel="stylesheet" href="css/helpers.css">
		<link rel="stylesheet" href="css/news.css">
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

<!--Hero section-->
<section class="hero">
	<div class="hero__container container">
		<div class="hero__content">
			<h1 class="hero__title">Fantastic Animals</h1>
			<p class="hero__description">We are trying to help every animal and find a lovely 
				house for it.<br>Help us to help them</p>
			<a href="contact.php" class="hero__button button">Get in touch with us</a>
		</div>
	</div>
</section>
<!--Hero section-->

<!--Offers section-->
<section class="offers">
	<div class="offers__container">
		<h1 class="offers__title">Our offers</h1>
		<hr class="offers__line">
		<div class="offers__cards"> 
			<div class="offers__card">
				<img class="offers__photo" src="images/husky-siberian.jpg" alt="A siberian husky">
				<a href="#" class="offers__button button">Siberian Husky - 600$</a>
			</div>
			<div class="offers__card">
					<img class="offers__photo" src="images/british-cat.jpg" alt="A british cat">
					<a href="#" class="offers__button button">British Short-Hair Cat - 550$</a>
			</div>
			<div class="offers__card">
					<img class="offers__photo" src="images/otter.jpg" alt="An otter husky">
					<a href="#" class="offers__button button">Otter - 800$</a>
			</div>
		</div>
		<h4 class="offers__subtitle">Are you searching for something else?</h4>
		<a href="shop.php" class="button --shop">go to the shop</a>
	</div>
</section>
<!--Offers section-->

<!--News section-->
<section class="news">
	<div class="news__container h-center">
		<h1 class="news__title">News</h1>
		<hr class="news__line">
		<p class="news__description">Together we can move the world to protect animals</p>
		<div class="news__content">
			<a href="#" class="news__card">
				<img class="news__image" src="images/rescued-dog.jpg" alt="News">
				<span class="news__sub-title">Doggo rescued from bad owners</span>
			</a>
			<a href="#" class="news__card">
				<img class="news__image" src="images/horse.jpg" alt="News">
				<span class="news__sub-title">Starving</span>
			</a>
			<a href="#" class="news__card">
				<img class="news__image" src="images/dog-in-water.jpg" alt="News">
				<span class="news__sub-title">Let behind</span>
			</a>
		</div>
	</div>
</section>
<!--News section-->

<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>
</html>