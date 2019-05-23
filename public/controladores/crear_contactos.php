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

 $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
 $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
 
 $sql = "INSERT INTO contactos VALUES (0,'$nombres','$correo')";
 
 
 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
 }
  
 //cerrar la base de datos
 $conn->close();
 echo "<a href='../vista/contactos.html'>Regresar</a>";
 ?>
</body>
</html>