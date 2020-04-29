<!DOCTYPE html>
<html>
<head>
	<?php
	require("templates/meta.php");
	?>
	<title> <?= $title; ?> </title>
	<?php
	require("templates/styles.php");
	?>
</head>
<body class="">
	<div class="container ">
		<header>
			<div class="banner">
				<img src="images/banner.jpg" alt="Coffee Banner" class="coffee-banner w-100 mt-4"/>
			</div>
		</header>
		<?php
		require("templates/nav.php");
		?>
