<?php 
	//LC_ALL é uma constate do PHP que chama a data em pt_BR
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	echo ucwords(strftime("%A %B"));
	echo "<br>";
	echo ucwords(strftime("Hoje é %d de %B de %Y"));


 ?>