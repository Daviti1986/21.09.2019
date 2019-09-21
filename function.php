

<?php
$titles=["home page"=> "index.php", "contact"=> "contact.php"];
$evailale_pages=['home page', "contact"];
if (!in_array("too", $evailale_pages)) {
	show_404();
	return;
	die;
}
?>
<div id="main">
		<?php include($page . ".php")?>
	</div>
