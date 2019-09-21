<!DOCTYPE html>
<html >
<head>
	<?php include './head.php'; ?>
</head>
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
	

</body>
</html>