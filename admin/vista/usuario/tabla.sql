CREATE TABLE `usuario` (
 `usu_codigo` int(11) NOT NULL AUTO_INCREMENT,
 `usu_cedula` varchar(10) NOT NULL,
 `usu_nombres` varchar(50) NOT NULL,
 `usu_apellidos` varchar(50) NOT NULL,
 `usu_direccion` varchar(75) NOT NULL,
 `usu_telefono` varchar(20) NOT NULL,
 `usu_correo` varchar(20) NOT NULL,
 `usu_password` varchar(255) NOT NULL,
 `usu_fecha_nacimiento` date NOT NULL,
 `usu_eliminado` varchar(1) NOT NULL DEFAULT 'N',
 `usu_fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `usu_fecha_modificacion` timestamp NULL DEFAULT NULL,
 PRIMARY KEY (`usu_codigo`),
 UNIQUE KEY `usu_cedula` (`usu_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;