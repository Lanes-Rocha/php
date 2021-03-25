<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trabalhando com o DateTime()</title>
	<link rel="stylesheet" href="">
</head>
	<body>
		<?php 
			$dt = new DateTime();
			$dt->add();
			
			echo $dt->format("d/m/Y H:i:s");

		 ?>
	</body>
</html>