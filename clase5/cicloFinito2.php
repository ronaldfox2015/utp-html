<html>
  <head><title> Tabla de multiplicar</title></head>
  <body>
    <h2 style="color:red;">Tabla de multiplicar</h2>
    <?php
      #ciclo finito for()
      $fac=5;
      #Tabla de multiplicar del factor
      for($kon=1;$kon<=12;$kon++){
        echo "<p style='color:blue;'>$fac x $kon = ".$fac*$kon."</p>";
      }
    ?>
   </body>
</html>