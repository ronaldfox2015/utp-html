<HTML>
<HEAD>
<TITLE>Mi tercer programa en PHP</TITLE>
</HEAD>
<BODY>
	<h2>Estructura de condiciones múltiples</h2>
	<?php
	$extension = "PDF";
	switch ($extension)
	{ 	case ("PDF"):  	$tipo = "Documento Adobe PDF";   break;
   		case ("TXT"):   $tipo = "Documento de texto";    break;
   		case ("HTML"):
   		case ("HTM"):   $tipo = "Documento HTML";    break;
		default:
      			$tipo = "Archivo " . $extension;
	}
	echo  $tipo; 
	?>
</BODY>
</HTML>