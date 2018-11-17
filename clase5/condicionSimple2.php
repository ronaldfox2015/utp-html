<html>
     <head><title> CondicionSimple2 </title> </head>
     <body>
      <h2 style="color:red;">Ejemplo de condición simple</h2>
      <?php
        $color = "color:blue";
        $numero=8;
        if($numero>0){
          if($numero%2==0)
            printf('<p style="%s">El numero %s es par</p>',$color,$numero);
          else
            printf('<p style="%s">El numero %d es impar </p>',$color,$numero);
        }
        else
            printf("<br>El Numero no es entero positivo");
      ?>
      </body>
</html>