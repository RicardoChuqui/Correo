<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <?php
    $correo=$_GET["usu_correo"];
    $sql = "SELECT * FROM usuario where usu_correo=$correo";

    echo "hola" .$correo;
    ?>
</body>
</html>   

