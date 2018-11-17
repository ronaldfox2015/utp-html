<?php
#condicion multiple - switch()
$numDiaSem=5;
switch($numDiaSem){
	case 1: echo "Es día lunes"; break;
	case 2: echo "Es día martes"; break;
	case 3: echo "Es día miércoles"; break;
	case 4: echo "Es día jueves"; break;
	case 5: echo "Es día viernes"; break;
	case 6: echo "Es día sábado"; break;
	case 7: echo "Es día domingo"; break;
	default:
			echo "Este número de día de semana no existe";
}
?>