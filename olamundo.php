<?php echo"ola mundo"; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>entrada de dados do formulario</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body  class="cordefundo">
     <center>
        <h1>insira seu username e sua senha </h1><hr/>
        <table border="1" class="cortabela1">
         
        <form action="submit.php" method="post">
               <tr>
              <td> usuario:</td> <td> <input type="text" name="uname" size="40" ></td>
            </tr>
             <tr>
                 <td>senha:</td> <td> <input type="password" name="password"> </td>
            </tr>
          
              
                       <td></td> <td><input type="submit" value="Enviar">
                                     <input type="reset" value="cancelar"></td>
                  </tr>
         
              
           
        </form>
        </table>
     </center>
    </body>
</html>
