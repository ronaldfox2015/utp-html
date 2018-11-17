<html>
  <head><title> Dia de la Semana</title></head>
  <body>
    <h2 style="color:red;">Identificar día de semana </h2>
    <?php
      $numero=3;
      if($numero>=1 && $numero<=7){
        switch($numero){
          case 1:$dia="Lunes"; break;
          case 2: $dia="Martes"; break;
          case 3: $dia="Miercoles"; break;
          case 4: $dia="Jueves"; break;
          case 5: $dia="Viernes"; break;
          case 6: $dia="Sábado"; break;
          case 7: $dia="Domingo"; break;
        }
        echo "El dia de la semana que le corresponde es $dia";
      }
      else
        echo "El Numero $numero no está en el rango de 1 a 7";
    ?>
   </body>
</html>