<?php
	$vec= array(23, 42, 35, 63);
	#Vector manejado con índice
	for($ind=0;$ind<count($vec);$ind++){
		echo $vec[$ind]."<br>";
	}
	#vector manejado con ciclo de objetos
	echo"<hr>";
	foreach ($vec as $e) {
		echo $e."<br>";
	}
	echo "<hr>";
	print_r ($vec);
?>