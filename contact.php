<!DOCTYPE html>
<html>
<head>
		<?php include './head.php'; ?>
</head>
<body>
	
	<header>
		<?php include './menu.php'; ?>
		<?php include './function.php'; ?>

	</header>
<div id="main-dynamic-areaa">
	<?php
		
		$page = $_GET['page'];
		if (file_exists($page.'.php')) {
			include( $page . '.php');
		} elseif (strlen($page)) {
			echo 'NOT FOUND';
		} 
		else {
			include './index.php';
			include './index.php';
		}
	?>
	</div>

	<form method="POST" action="register.php" enctype="multipart/form-data" class="model">
		<input  type="text" name="name" /> <H3>Name</H3>
		<input \ type="text" name="lastname" /> <H3>Lastname</H3>
		<input \ type="text" name="adress" /> <H3>Adress</H3>
		<input \ type="text" name="email" /> <H3>Email</H3>
		<input type="file" name="file" />
		<button type="submit">Submit</button>
	
</form>

</body>
</html>