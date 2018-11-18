<?php
$mes = [
	"Enero","Febrero","Marzo","Mayo","Junio","Julio","Agosto","Setiembre","Optubre","Nobiembre","Diciembre"
];

$color = [
	"#f30000","#211ce0"
];

foreach ($mes as $key => $value) {
	$post = 0 ;
	if( $key % 2 == 0 ){
		$post = 1;
	}
   printf('<p style="color:%s">Mes : %s</p>',$color[$post],$value);
   $post ++;
}

?>