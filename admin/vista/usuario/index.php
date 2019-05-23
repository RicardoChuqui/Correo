<?php
   session_start();
   if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
   header("Location: /correophp/public/vista/login.html");
   }
  ?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <linK rel="stylesheet" type="text/css" href="estilos/estilo.css">
</head>
<body>

 <table>
 <tr>
 <th>Codigo</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Correo</th>
 <th>Eliminar</th>
 <th>Modificar</th>
 <th>Cambiar Contraseña</th>
 </tr>
 <?php
 include '../../../config/conexionBD.php';
 $sql = "SELECT * FROM usuario";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td>" . $row["usu_codigo"] . "</td>";
 echo " <td>" . $row['usu_nombres'] ."</td>";
 echo " <td>" . $row['usu_apellidos'] . "</td>";
 echo " <td>" . $row['usu_correo'] . "</td>";
 echo " <td> <a href='eliminar.php? usu_codigo=". $row["usu_codigo"] . "'>Eliminar</a></td>"; 
 echo " <td> <a href='actualizar.php ? usu_codigo=". $row["usu_codigo"] . "'>Modificar</a></td>";                                   
 echo " <td> <a href='cambiar_contraseña.php ? usu_codigo=". $row["usu_codigo"] . "'>ModificarContrasena</a></td>";     
 echo "</tr>";
 
 }
 echo "<a href='cerrarSesion.php'> CerrarSesion</a>";
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 $conn->close();
 ?>
 </table>
</body>
</html>