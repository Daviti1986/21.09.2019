<!DOCTYPE html>
<html>
<head>
		<?php include './head.php'; ?>
</head>
<body>
	
	<header>
		<?php include './menu.php'; ?>
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