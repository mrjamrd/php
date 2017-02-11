<?php
 require_once("inc/usuarios.php");
 $tra = new Usuarios();
 $datos = $tra->getDatos();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
          <h2>hola mundo</h2>
          <div class="table">
               <table class="table">
                 <thead>
                   <th>
                     <td>
                       id
                     </td>
                     <td>
                       nombre
                     </td>
                     <td>
                       Correo
                     </td>
                     <td>
                       telefono
                     </td>
                     <td>
                       fecha
                     </td>
                     <td>
                       acciones
                     </td>
                   </th>
                 </thead>
                 <?php
                   foreach ($datos as $fila) {
                  ?>
                 <tbody>

                   <th>
                     <td>
                       <?php echo $fila->id; ?>
                     </td>
                     <td>
                        <?php echo $fila->nombre; ?>
                                          </td>
                     <td>
                        <?php echo $fila->correo; ?>
                                          </td>
                     <td>
                        <?php echo $fila->telefono; ?>

                     </td>
                     <td>
                        <?php echo $fila->fecha; ?>
                                         </td>
                     <td>
                       <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-print"></span></a>
                     </td>
                   </th>
                   <?php
                     }
                    ?>
                 </tbody>
               </table>

          </div>
      </div>
  </body>
</html>
