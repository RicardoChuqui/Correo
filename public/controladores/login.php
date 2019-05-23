<?php
 session_start();
 include '../../config/conexionBD.php';
 $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 $sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password =
MD5('$contrasena')";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
 $tipo=$row["tipo_usuario"];
 if('ADMIN'==$tipo){
    echo '<script> alert("Logueado como Administrador")</script>';
    echo "<script> location.href='indexadmin.php'</script>";
    //header("Location: ../../admin/vista/usuario/index.php"); 
 } elseif('USER'==$tipo){
    echo '<script> alert("Logueado como usuario")</script>';
    echo "<script> location.href='indexusuario.php?usu=usuario'</script>";
 
 }
}else{
    echo '<script> alert("Tipo de usuario no existe,necesita registrarse")</script>';
    echo "<script> location.href='../vista/crear_usuario.html'</script>"; 
}

 $conn->close();
?>