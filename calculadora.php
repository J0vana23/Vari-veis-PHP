 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AULA 07/03</title>
  </head>
  <body>

    <?php

if(isset($_GET['operacao']) && isset($_GET['X']) && isset($_GET['Y'])){
    if($_GET['operacao'] == "adicao"){
        echo $_GET['X'] + $_GET['Y'];
        }
 
      else if($_GET['operacao'] == "subtracao"){
          echo  $_GET['X'] - $_GET['Y'];
         }

         else if($_GET['operacao'] == "divisao"){
            echo  $_GET['X'] / $_GET['Y'];
             }

             else if($_GET['operacao'] == "multiplicacao"){
                echo  $_GET['X'] * $_GET['Y'];
                 }
                }
    ?>
    
  </body>
</html>
