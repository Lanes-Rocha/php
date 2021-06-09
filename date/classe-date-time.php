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
			$periodo = new DateInterval("P15D");//Na ducomentação do php o metodo DateInterval explica P15D
												/*
													P  = Período
													15 = Quantidade
													D = dias

												*/

			echo $dt->format("d/m/Y H:i:s");//Metodo format();

			$dt->add($periodo);

			echo "<br>";
			echo $dt->format("d/m/Y H:i:s");
			

		 ?>
	</body>
</html>