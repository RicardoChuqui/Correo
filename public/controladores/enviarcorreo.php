<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Crear Nuevo Usuario</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
 <?php
 //incluir conexión a la base de datos
 include '../../config/conexionBD.php'; 
 $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
 $asunto = isset($_POST["asunto"]) ? mb_strtoupper(trim($_POST["asunto"]), 'UTF-8') : null;
 $mensaje = isset($_POST["mensaje"]) ? mb_strtoupper(trim($_POST["mensaje"]), 'UTF-8') : null;
 
 $sql = "INSERT INTO correo VALUES (0,'$correo','$asunto','$mensaje','N', null, null)";
 
 
 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
 }
  
 //cerrar la base de datos
 $conn->close();
 echo "<a href='../vista/enviar_correo.html'>Regresar</a>";
 ?>
</body>
</html>