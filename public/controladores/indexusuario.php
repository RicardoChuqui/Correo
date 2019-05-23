<?php
include '../../config/conexionBD.php';
$sql = "SELECT u.usu_nombres,u.usu_codigo,c.fecha_envio,u.usu_correo,c.corr_destinatario,c.corr_asunto, u.imagen FROM usuario u , correo c GROUP BY u.usu_correo";
$res=mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript"  src="ajax/ajax.js"> </script>
    <title>Visualizar informacion</title>
    <script type="text/javascript"  src="ajax/ajax.js"> </script>
    <linK rel="stylesheet" type="text/css" href="../../admin/vista/usuario/estilos/estilo.css">
</head>
<body>
<ul id="button">
 <li><a href="#">Inicio</a></li>
 <li><a href="../vista/enviar_correo.html">Nuevo Mensaje</a></li>
 <li><a href="../vista/indexadmin.php">Mensajes Enviados</a></li>
 <li><a href="../vista/crear_usuario.html">Mi Cuenta</a></li>
 </ul>

 
<table id="tabla">
 <tr>
 <th>Fecha</th>
 <th>Remitente</th>
 <th>Asunto</th>
 <th>Leer</th>
 </tr>
<?php
while ($data=mysqli_fetch_array($res))
{
    echo "<tr>";
    echo " <td>" . $data["fecha_envio"] . "</td>";
    echo " <td>" . $data['usu_correo'] ."</td>";
    echo " <td>" . $data['corr_asunto'] . "</td>";
    echo '<img id="foto" src="'.$data['imagen'].'" width="200px" height="200px">';
    echo  "<br>"."<br>".$data['usu_nombres']."<br>" ;
    echo " <td> <a href='../../admin/vista/usuario/eliminar.php? usu_codigo=". $data["usu_codigo"] . "'>Leer</a></td>"; 
    echo "</tr>";
   
   
    
}
?>

</table>
<form onsubmit="return buscarPorCedula()" >
<input type="text" id="buscar" name="buscar" value="" placeholder="Buscar por Remitente"/>
<br>
<input type="submit" id="btnbuscar" name="submit" value="Buscar" onclick="buscar()"/>
</form>
</body>
</html>