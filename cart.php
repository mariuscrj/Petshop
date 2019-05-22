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
	<?php
  include 'connect.php';
	$sql = 'SELECT * FROM cart WHERE user_id = '.$_SESSION["id"].'';
	if( $sql != null ) {
		$products = "SELECT * FROM items i, cart c WHERE i.id = c.items_id";
		$items = mysqli_query($link, $sql);
		$items2 = mysqli_query($link, $products);
	}

	$sum = 0;
?>
	<h1 class="title">Cart</h1>
	<div class="container container--cart">
		<?php while ( ($row = mysqli_fetch_array($items2))) { ?>
			<p class="h-text-center">Produse:<?php echo $row['name']?></p>
			<p class="h-text-center">Pret: <?php echo $row['price']?>$</p>
			<?php $sum = $sum + $row['price'] ?>
		<?php } ?>
		<p class="h-text-center">Total: <?php echo $sum ?>$</p>
		<form method="post" action="order.php" class="form-cart">
			<label class="form__label" for="name">Adresa:</label>
			<input class="form__input" type="text" name="adress" id="adress" placeholder="Adresa">
			<button value="complete" name="complete" class="h-align-center button">Comanda</button>
		</form>
			<form method="post" action="cartStore.php" class="form h-center">
				<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
				<button class="button h-max-width" value="delete" name="delete">delete</button>
			</form>
		<a href="shop.php" class="button h-align-center">Go to the shop</a>
	</div>
</section>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>