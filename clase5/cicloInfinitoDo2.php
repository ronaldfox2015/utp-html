<html>
  <head><title> Serie de caracteres ASCII</title></head>
  <body>
    <h2 style="color:red;">Serie de letras mayúsculas</h2>
    <?php
      #Ciclo infinito do()
      $codAsc=65;
      #Muestra la serie de caracteres A a Z
      do{
        echo "<p style='color:blue;'>Caracter ASCII $codAsc: ";
        echo chr($codAsc),"</p>";
        $codAsc++;
      }while($codAsc<=90);
    ?>
   </body>
</html>