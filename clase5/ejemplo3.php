<HTML>
<HEAD>
<TITLE>Mi tercer programa en PHP</TITLE>
</HEAD>
<BODY>
<?php
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) 
    echo 'Está usando Internet Explorer.';
  else
  	echo 'No está usando Internet Explorer.' 

?>
</BODY>
</HTML>