<html>
  <head><title> Serie de números enteros</title></head>
  <body>
    <h2 style="color:red;">Serie de números enteros 1 a 5</h2>
    <?php
      #Ciclo infinito while()
      $numEnt=1;
      #Muestra los números enteros 
      while($numEnt<=5){
        echo "<p style='color:blue';>Número $numEnt";
        echo ($numEnt%2==0?" y es par ":" y es impar"),"</p>";
        $numEnt++;
      }
    ?>
   </body>
</html>