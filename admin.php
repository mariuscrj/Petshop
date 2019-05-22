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
<?php include 'connect.php'; ?>
<?php include 'layouts/header.php'; ?>
<?php 
	if(	isset($_SESSION['admin'])!=1) {
			echo '<h1>Acces denied</h1>';
			header( "refresh:2;url=http://petshop.site/index.php" );
			die();
	}
?>
<!--header-->
<section class="admin">
	<div class="container">
		<h1 class="title"> Hello! </h1>
			<form action="adminStore.php" class="form form-admin" method="post" enctype="multipart/form-data">
				<label class="form__label" for="image">Select image:</label>
				<input type="file" name="image" id="image">
				<label class="form__label" for="name">Product name:</label>
				<input class="form__input" type="text" name="name" id="name" placeholder="Name of product">
				<label class="form__label" for="price">Price:</label>
				<input class="form__input" type="text" name="price" id="price" placeholder="Price">
				<button name="save" value="save" type="submit" class="button h-max-width">Save</button>
			</form>
		<?php
			$sql = "SELECT * FROM items";
			$items = mysqli_query($link, $sql);
		?>
		<div class="administration">		
			<?php 
				if (isset($_POST['edit'])) { 
					$editSql = 'SELECT * FROM items WHERE id='.$_POST['item_id'].'';
					$itemEdit = mysqli_query($link, $editSql);
			?>
				<?php while ( ($row = mysqli_fetch_array($itemEdit))) { ?>
					<div class="container--admin">
						<form method="post" action="adminStore.php" class="form" enctype="multipart/form-data">
							<?php echo '<img class="card__image h-responsive-image" src="data:image/jpeg;base64,'. base64_encode($row['image']) .'" />'; ?>
							<label class="form__label" for="edit_image">Select image:</label>
							<input type="file" name="edit_image" id="edit_image">
							<label class="form__label" for="edit_name">Product name:</label>
							<input type="text" placeholder="<?php echo $row['name']; ?>" name="edit_name" value="<?php echo $row['name']; ?>">
							<label class="form__label" for="edit_price">Price:</label>
							<input type="text" placeholder="<?php echo $row['price']; ?>" name="edit_price" value="<?php echo $row['price']; ?>">
							<input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
							<button class="button -green h-full-width" value="edit" name="save_edit">Save</button>
						</form>
					</div>
				<?php } ?>
			<?php } ?>
			<?php while ( ($row = mysqli_fetch_array($items))) { ?>
				<div class="container--admin">
						<?php echo '<img class="card__image h-responsive-image" src="data:image/jpeg;base64,'. base64_encode($row['image']) .'" />'; ?>
						<p>Name:<?php echo $row['name']; ?></p>
						<p>Price:<?php echo $row['price']; ?></p>
					<form method="post" action="admin.php" class="form">
						<input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
						<button class="button -green h-full-width" value="edit" name="edit">edit</button>
					</form>
					<form method="post" action="adminStore.php" class="form">
						<input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
						<button class="button h-full-width" value="delete" name="delete">delete</button>
					</form>
				</div>
			<?php } ?>
		</div>
	</div>

</section>
<!--Footer-->
<?php include 'layouts/footer.php'; ?>
<!--Footer-->
</body>