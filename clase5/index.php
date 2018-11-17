<?php 
require("model/Process.php");
$mode = new Process();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  2 + 2 = <?php echo $mode->suma(2,2)?>
</body>
</html>