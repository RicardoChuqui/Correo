
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
 if(isset($_FILES['img'])){
   $nombreImg=$_FILES['img']['name'];
   $ruta=$_FILES['img']['tmp_name'];
   $destino="imagenes/".$nombreImg;
   $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
 $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 $user_tipo = isset($_POST["tipo"]) ? mb_strtoupper(trim($_POST["tipo"]), 'UTF-8') : null;
   if(copy($ruta,$destino)){
       
       $sql = "INSERT INTO usuario VALUES (0,'$nombres','$correo', MD5('$contrasena'), 'N', null, null,'$user_tipo','$destino')";
 
       $res=mysqli_query($conn,$sql);
       if($res){
         echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
       }else{
           die("Error".mysqli_error($conn));
         }

      }
  
  }
 $conn->close();
 echo "<a href='../vista/crear_usuario.html'>Regresar</a>";
 ?>
</body>
</html>