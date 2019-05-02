<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/defaults.css">
		<link rel="stylesheet" href="css/shop.css">
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
<section class="shop">
	<div class="container">
		<h1 class="shop__title">Animals</h1>
		<hr class="line">
		<div class="shop__item">
			<h2 class="shop__sub-title">Cats</h2>
			<div class="columns">
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/cat-1.jpeg" alt="cat-1">
							<a class="button"href="#">Cat 1</a>
						</div>
					</div>
				</div>
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/cat-2.jpeg" alt="cat-2">
							<a class="button"href="#">Cat 2</a>
						</div>
					</div>
				</div>
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/british-cat.jpg" alt="british-cat">
							<a class="button"href="#">British cat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="shop__item">
			<h2 class="shop__sub-title">Dogs</h2>
			<div class="columns">
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/husky-siberian.jpg" alt="A-siberian-husky">
							<a class="button"href="#">Siberian Husky</a>
						</div>
					</div>
				</div>
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/shiba-inu.jpg" alt="A-shiba-inu-doggo">
							<a class="button"href="#">Shiba inu</a>
						</div>
					</div>
				</div>
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/golden-retriever.jpg" alt="golden-retriever">
							<a class="button"href="#">Golden Retriever</a>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="shop__item">
			<h2 class="shop__sub-title">Otters</h2>
			<div class="columns">
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/otter-1.jpg" alt="otter-1">
							<a class="button"href="#">Otter 1</a>
						</div>
					</div>
				</div>
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/otter-2.jpg" alt="otter-2">
							<a class="button"href="#">Otter 2</a>
						</div>
					</div>
				</div>
				<div class="column is-three">
					<div class="card">
						<div class="card__item">
							<img class="card__image" src="images/otter.jpg" alt="otter">
							<a class="button"href="#">Otter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>
</html>