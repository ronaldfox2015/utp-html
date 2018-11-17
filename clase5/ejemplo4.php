<HTML>
<HEAD>
<TITLE>Mi tercer programa en PHP</TITLE>
</HEAD>
<BODY>
	<h2>Mensajes de validación realizadas en el servidor </h2>
	<?php
	$cantidad = -15;
	if ( $cantidad < 0 ) 
	{
		print("Error:: La cantidad es negativa!");
	}
	elseif ( $cantidad < 10 )
	{
		print("La cantidad pedida es menor que 10");
	}
	else
	{
		print("La cantidad aceptada es: $cantidad");
	}
	?>
</BODY>
</HTML>