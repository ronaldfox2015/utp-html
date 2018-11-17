<HTML>
<HEAD>
<TITLE>Mi segundo programa en PHP</TITLE>
</HEAD>
<BODY>
<?php
   $mensaje_es="Hola UTP";
   $mensaje_en="Hello UTP";
   $idioma = "es";
   $mensaje = "mensaje_" . $idioma;
   print $$mensaje;
?>
</BODY>
</HTML>