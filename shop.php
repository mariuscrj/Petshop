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
<?php
  include 'connect.php';
	$sql = "SELECT * FROM items";
	$items = mysqli_query($link, $sql);
?>
	<div class="container">
		<h1 class="shop__title">Animals</h1>
		<hr class="line">
			<div class="columns h-wrap">
				<?php while ( ($row = mysqli_fetch_array($items))) { ?>
							<div class="column is-three">
								<div class="card">
									<div class="card__item">
										<?php echo '<img src="data:image/jpeg;base64,'. base64_encode($row['image']) .'" />'; ?>
										<a class="button" href="#"><?php echo $row['name'] . '-' . $row['price']; ?>$</a>
										<form method="post" action="cartStore.php">
											<input type="hidden" name="item_id" value=<?php echo $row['id']; ?>>
											<button class="button -green h-full-width" value="add_cart" name="addCart">Add to cart</button>
										</form>
									</div>
								</div>
							</div>
					<?php } ?>
			</div>
		</div>
</section>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>
</html>