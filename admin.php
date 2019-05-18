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
<section class="cart">
	<div class="container">
		<h1 class="title"> Hello! </h1>
		<form action="adminStore.php" class="form form-admin" method="post" enctype="multipart/form-data">
			<label class="form__label" for="image">Select image:</label>
			<input type="file" name="image" id="image">
			<label class="form__label" for="name">Product name:</label>
			<input class="form__input" type="text" name="name" id="name" placeholder="Name of product">
			<label class="form__label" for="price">Price:</label>
			<input class="form__input" type="text" name="price" id="price" placeholder="Price">
			<button name="save" value="save" type="submit" class="button">Save</button>
		</form>
	</div>

</section>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>