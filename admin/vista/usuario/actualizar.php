
  
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos de persona</title>    
    <linK rel="stylesheet" type="text/css" href="estilos/estilo.css">
</head>

<body>
    <?php
      include '../../../config/conexionBD.php';
        $codigo = $_GET["usu_codigo"];
        $sql = "SELECT * FROM usuario where usu_codigo='$codigo'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
             ?>

                  <div id="registro">
                <form  method="POST" action="actualizarDatos.php">

                <br>
                    <label for="usu_codigo">Codigo (*)</label><br>
                    <input  type="hidden"  id="usu_codigo" name="usu_codigo"  value="<?php echo $codigo ?>" />
                    <br>
                   
                    <label for="cedula">Cedula (*)</label><br>
                    <input type="text" id="cedula" name="cedula" value="<?php echo $row['usu_cedula'];?>"><br/>
                    <br>
                    <label for="nombres">Nombres (*)</label><br>
                    <input type="text" id="nombres" name="nombres"  value="<?php echo $row['usu_nombres'];?>"><br/>
                    <br>
                    <label for="apellidos">Apelidos (*)</label><br>
                    <input type="text" id="apellidos" name="apellidos"  value="<?php echo $row['usu_apellidos'];?>"><br/>
                    <br>
                    <label for="direccion">Dirección (*)</label><br>
                    <input type="text" id="direccion" name="direccion"  value="<?php echo $row['usu_direccion'];?>"><br/>
                     <br>
                    <label for="telefono">Telefono (*)</label><br>
                    <input type="text" id="telefono" name="telefono" value="<?php echo $row['usu_telefono'];?>"><br/>
                    <br>
                    <label for="fecha">Fecha Nacimiento (*)</label><br>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento"  value="<?php echo $row['usu_fecha_nacimiento'];?>"><br/>
                    <br>
                    <label for="correo">Correo electrónico (*)</label><br>
                    <input type="text" id="correo" name="correo"  value="<?php echo $row['usu_correo'];?>"><br/>
                    <br>
                    <input type="hidden" name="usu_fecha_modificacion" value="<?php echo date("Y-m-d H:i:s", time()); ?>" />
                    <br>
                    <br>
                    <input type="submit" id="guardar" name="guardar" value="Guardar" />
                    <input type="reset" id="regresar" name="regresar" value="Cancelar" onclick="location.href = 'index.php';" />
                </form>    
            </div>
             <?php
            }
        } else {            
            echo "Ha ocurrido un error inesperado !";
        }
        $conn->close();         
    ?>                      
</body>
</html>
