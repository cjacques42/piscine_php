<html>
	<head>
		<title>E-COMMERCE</title>
		<link rel="stylesheet" link="text/css" href="public/style.css">
	</head>
	<body>
		<div id="_body">
			<div id="header">
				<?php require(ROOT . "view/header.php");?>
			</div>
			<div id="menu_left">
				<?php require(ROOT . "view/menu_left.php");?>
			</div>
			<div id="content">
				<?php
					require(ROOT . "view/default.php");
				?>
			</div>
			<div id="menu_right">
				<?php require(ROOT . "view/menu_right.php");?>
			</div>
			<div id="footer">
				<?php require(ROOT . "view/footer.php");?>
			</div>
		</div>
	</body>
</html>
