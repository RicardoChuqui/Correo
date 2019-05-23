# Creación de una aplicación web usando PHP y Base de 

¿Qué es PHP?
 PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.
 El código de PHP está encerrado entre las etiquetas especiales de comienzo y final que permiten entrar y salir del "modo PHP". Lo que distingue a PHP de algo del lado del cliente como Javascript es que el código es ejecutado en el servidor, generando HTML y enviándolo al cliente. 
El cliente recibirá el resultado de ejecutar el script, aunque no se sabrá el código subyacente que era. El servidor web puede ser configurado incluso para que procese todos los ficheros HTML con PHP, por lo que no hay manera de que los usuarios puedan saber qué se tiene debajo de la manga. 
 Práctica de laboratorio 05 - Creación de una aplicación web usando PHP y Base de Datos 
 - Configuración de base de datos 
a. Iniciamos nuestro servidor (XAMPP). 
   -Iniciamos el servidor apache
   -Iniciamos la base de datos MariaDB
b. Accedemos a nuestro servidor web apache a través de un navegador web. 
c. Accedemos a la administración de nuestra base de datos a través de la herramienta phpmyadmin. 
d. Creamos una base de datos llamada “hipermedial” con codificación utf8_general_ci
e. Creamos una tabla llamada “usuario” con codificación utf8_general_ci 
f. Creamos la siguiente estructura en la tabla usuarios.

### 2. Creación de estructura en servidor web (apache) 
    
a. Crear una carpeta llamada “SistemaDeGestion” dentro de la carpeta “htdocs” del servidor apache.
b. Dentro de la carpeta “SistemaDeGestion” crear la siguiente jerarquía de carpetas.


### 3. Conexión a la base de datos desde php
    
a. Dentro de la carpeta config crear un archivo llamado conexionBD.php 
b. Agregar en el archivo conexionBD.php el siguiente código de PHP.


### 1.	¿Qué es mysqli? 
Representa una conexión entre PHP y una base de datos MySQL.
Para inicializar esta conexión, se inicializa un objeto de la clase MySQLi y pasa cuatro argumentos al constructor del objeto: el nombre del servidor anfitrión de MySQL al que intentas conectarte, un nombre y una contraseña válidos para obtener el acceso necesario, y el nombre de la base de datos que quieres utilizar.
 ## 2. ¿Qué hace la función set_charset()?
Establece el conjunto de caracteres predeterminado a usar cuando se envían datos desde y hacia el servidor de la base de datos.
##  4. Probar conexión a la base de datos 
a. Acceder desde un navegador web al archivo conexionBD.php, es decir, http://localhost/SistemaDeGestion/config/conexionBD.php
b. Debe mostrar el mensaje de conexión exitosa, caso contrario, verificar los datos de acceso (username, password, database name, etc).
## 5. Persistir información en la base de datos a través de un formulario HTML. 
a. Dentro de la carpeta vista de la carpeta public se pide crear un archivo html con el nombre crear_usuario.html. 
b. Dentro de la carpeta controladores de la carpeta public se pide crear un archivo php con el nombre crear_usuario.php. 
c. Dentro del archivo crear_usuario.html se pide crear un formulario HTML con los mismos campos de la tabla usuario, excepto las columnas: usu_codigo, usu_eliminado, usu_fecha_creacion y usu_fecha_modificacion.:
## Creacion de los archivos

-Los campos de usuario y contraseña deben tener los tipos de input email y password respectivamente.
-Verificar que todos los campos del formulario tengan asignada la propiedad name y que sea un valor único. 
-Asegurar que todos los inputs, labels y button estén dentro de la etiqueta form. 
-Verificar que la propiedad method de la etiqueta form sea igual a POST. 
-Verificar que la propiedad action de la etiqueta form apunte al archivo login.php 
-Ejemplo básico del archivo login.html

## Construido con 🛠️

_Herramientas usadas
* [Servidor web XAMPP](https://www.apachefriends.org/es/index.html)- servidor web y conexion mysql
* [Editor Visual Code](https://code.visualstudio.com/docs/languages/php) - El editor web usado
* [MYSQL](http://localhost/phpmyadmin/index.php)-crear la base de datos 
* [Git Bash](https://git-scm.com/downloads) - Para cargar proyectos git
* [GitHub](https://github.com/) - Donde se carga el trabajo realizado


## Autor ✒️

* **Ricardo Chuqui** - *Trabajo realizado* - [ricardochuqui](https://github.com/RicardoChuqui)

## Licencia 📄

Copyright &copy; 2019-2020 Ricardo Chuqui, todos los derechos reservados.




