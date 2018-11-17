<?php
	#Ciclo infinito do()
	$codAsc=65;
	#Muestra la serie de caracteres A a Z
	do{
		echo "Caracter ASCII $codAsc: ";
		echo chr($codAsc),"<br>";
		$codAsc++;
	}while($codAsc<=90);
?>