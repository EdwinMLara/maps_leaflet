-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2020 a las 19:40:33
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `senalitica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto`
--

CREATE TABLE `punto` (
  `id_p` int(11) NOT NULL,
  `name_p` varchar(255) NOT NULL,
  `type_p` int(11) NOT NULL,
  `description_p` text DEFAULT NULL,
  `addres_p` text NOT NULL,
  `tel_p` text DEFAULT NULL,
  `coor_lat_p` varchar(25) NOT NULL,
  `coor_lon_p` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `punto`
--

INSERT INTO `punto` (`id_p`, `name_p`, `type_p`, `description_p`, `addres_p`, `tel_p`, `coor_lat_p`, `coor_lon_p`) VALUES
(1, 'Panadería San Martín', 1, 'panaderia', 'Blvd. José María Morelos 63, Zona Centro, 38980 Uriangato, Gto.', '445 457 1360', '-101.179', '20.138'),
(2, 'Mercado Soriana - Galerías Metropolitana', 1, 'mercado', ' Blvd. Uriangato 240, Colinas, 38980 Uriangato, Gto.', '800 707 4262', '-101.179', '20.1198'),
(3, 'Biblioteca Publica Gerardo Pedraza', 1, 'biblioteca', 'Portal Independencia # 3, Uriangato, CP. 38980', ' 4454589800 al 29 ext. 113 ', '-101.178', '20.1411'),
(4, 'La Octava', 1, 'cafe', 'Portal Independencia # 11 Uriangato.', '445 457 5053', '-101.179', '20.1419'),
(5, 'Cuerpo de Rescate de Uriangato', 1, 'cruzroja', 'Blvd. Leovino Zavala #8 38980 Uriangato, Gto.', '445 4576 911', '-101.177', '20.1485'),
(6, 'Correos de México', 1, 'correos', 'Juan Escutia 3, Zona Centro, 38980 Uriangato, Gto.', '8007017000', '-101.179', '20.1429'),
(7, 'Oficina de Desarrollo Económico', 1, 'presidencia', 'Portal independencia # 3', '4454589800 Ext 121', '-101.178', '20.1412'),
(8, 'Parroquia de San Miguel Arcángel', 1, 'templo', 'Blvd. José María Morelos 1, Centro, 38980 Uriangato, Gto.', '445 457 5137', '-101.178', '20.1416'),
(9, 'Mercado José Dionisio Vallejo', 1, 'mercado', 'Calle Juan Escutia 5 C.P. 38980', '0', '-101.183', '20.1427'),
(10, 'Presidencia Municipal de Uriangato', 1, 'presidencia', 'Morelos # 1, Uriangato', '4454589800 Ext 29', '-101.178', '20.141'),
(11, 'Cinépolis Uriangato', 1, 'cine', 'Blvd. Uriangato 240-D, La Joyita, 38980 Uriangato, Gto', '445 453 2680', '-101.179', '20.1192'),
(12, 'Hospital Regional de Uriangato', 2, 'hospital', 'Blvd. Leovino Zavala No. 72, Col. Lázaro Cárdenas.', '445457 5470 ', '-101.171', '20.151'),
(13, 'Uriangato Caises Hospitalito', 2, 'hospital', 'Juan de la Barrera esquina con 5 de mayo, Zona Centro, 38980 Uriangato, Gto', '445 457 6851', '-101.183', '20.1419'),
(14, 'Uriangato Caises Aguilillas', 2, 'hospital', 'Flores Magón 101, La Joyita, 38985 Uriangato, Gto.', '445 457 5004', '-101.169', '20.1216'),
(19, 'BBVA Bancomer Uriangato Galerias', 3, 'banco', 'Blvd. Uriangato 200, 38980 Uriangato, Gto.', '55 5226 2663', '-101.179', '20.1212'),
(20, 'BBVA Bancomer', 3, 'banco', 'Blvd. José María Morelos 9, Zona Centro, 38980 Uriangato, Gto.', '55 5226 2663', '-101.178', '20.1405'),
(22, 'Banbajio', 3, 'banco', 'Av. Miguel Hidalgo 4, Zona Centro, 38980 Uriangato, Gto.', '445 457 7275', '-101.178', '20.1422'),
(23, 'Cajero Banorte', 3, 'banco', 'Blvd. Leovino Zavala esquina con Del Prado, Zona Centro, 38980 Uriangato, Gto.', '0', '-101.177', '20.1483'),
(24, 'Farmacia Guadalajara, S.A. de C.V.', 4, 'farmacia', 'Blvd. José María Morelos 95, Zona Centro, 38980 Uriangato, Gto.', '445 458 1204', '-101.179', '20.1363'),
(25, 'Farmacias San Francisco de Asis', 4, 'farmacia', ' Sebastián Lerdo de Tejada 44, Zona Centro, 38980 Uriangato, Gto.', '462 607 3800', '-101.178', '20.1445'),
(26, 'Farmacia Trini', 4, 'farmacia', 'Juan Escutia 10, Zona Centro, 38980 Uriangato, Gto.', '0', '-101.182', '20.1426'),
(27, 'Farmacias San Francisco de Asis', 4, 'farmacia', 'Portal Independencia Centro Histórico 7, Zona Centro, 38980 Uriangato, Gto.', '462 607 3800', '-101.178', '20.1401'),
(28, 'Sitio de Taxis - Central de Autobuses', 5, 'taxi', 'Fernández Lizardi 10, Lázaro Cárdenas, 38980 Uriangato, Gto.', '445 457 6240', '-101.173', '20.1498'),
(29, 'Sitio de Taxis - Hospital Regional', 5, 'taxi', 'Blvd. Leovino Zavala No. 72, Col. Lázaro Cárdenas.', ' 445 457 6240', '-101.172', '20.152'),
(30, 'Central de Autobuses', 5, 'autobuses', '', '4454575079', '-101.173', '20.1498'),
(31, 'Baños Públicos - Pasaje Lizardi y Leovino Zavala', 6, 'wc', 'Pasaje comercial Fernández Lizardi y Leovino Zavala', '0', '-101.174', '20.1508'),
(32, 'Baños Públicos - Leovino Zavala', 6, 'wc', 'Loevino Zavala # 63, Frente al OXXO. ', '0', '-101.174', '20.1511'),
(33, 'Baños Públicos - Central de Autobuses', 6, 'wc', 'Fernández Lizardi 10, Lázaro Cárdenas, 38980 Uriangato, Gto.', '0', '-101.174', '20.1495'),
(34, 'Baños Públicos - Del Prado', 6, 'wc', 'Avenida del Prado # 20', '0', '-101.178', '20.1485'),
(35, 'Baños Públicos - Mercado Dionisio Vallejo', 6, 'wc', 'Calle Juan Escutia, Calle Juan Escutia 5 C.P. 38980', '0', '-101.183', '20.1427'),
(36, 'Baños Públicos - Presidencia Municipal de Uriangato', 6, 'wc', 'Avenida Morelos # 1, Colonia Centro', '0', '-101.178', '20.141'),
(37, 'Baños Públicos - Parroquia de San Miguel', 6, 'wc', 'Avenida Morelos 1, Centro Histórico de Uriangato', '0', '-101.178', '20.1415'),
(38, 'Baños Públicos - Restaurante Chaquers', 6, 'wc', 'Portal Independencia # 20, Centro Histórico Uriangato', '0', '-101.179', '20.1413'),
(39, 'Baños Públicos - Plaza Obregón', 6, 'wc', 'Calle Obregón Esquina con Lerdo de Tejada, Uriangato, Gto.', '0', '-101.179', '20.1431'),
(40, 'Estacionamiento - Central de Autobuses', 7, 'estacionamiento', 'Fernández Lizardi 10, Lázaro Cárdenas, 38980 Uriangato, Gto.', '0', '-101.174', '20.1498'),
(41, 'Estacionamiento - Fernández de Lizardi', 7, 'estacionamiento', 'Calle Fernández de Lizardi # 46', '0', '-101.174', '20.149'),
(42, 'Estacionamiento - Leovino Zavala', 7, 'estacionamiento', 'Leovino Zavala # 16, Colonia Independencia', '0', '-101.175', '20.1498'),
(43, 'Estacionamiento - Reciento Ferial', 7, 'estacionamiento', 'Fernández de Lizardi 50, Zona Centro, 38980 Uriangato, Gto.', '0', '-101.174', '20.148'),
(44, 'Estacionamiento - Lavado América', 7, 'estacionamiento', 'Blvd. Leovino Zavala 107, Independencia, Uriangato, Gto.', '0', '-101.177', '20.1501'),
(45, 'Estacionamiento - Club de Leones', 7, 'estacionamiento', 'Blvd. Leovino Zavala 60A, Lazaro Cardenas, Uriangato, Gto.', '0', '-101.173', '20.151'),
(46, 'Estacionamiento - Del Prado - Morales', 7, 'estacionamiento', 'Av. Álvaro Obregón 91, Agricola, 38980 Uriangato, Gto.', '0', '-101.179', '20.1473'),
(47, 'Estacionamiento - Obregón', 7, 'estacionamiento', 'Av. Álvaro Obregón 82, Zona Centro, Uriangato, Gto.', '0', '-101.179', '20.147'),
(48, 'Estacionamiento - Acsa', 7, 'estacionamiento', 'Sebastián Lerdo de Tejada 32, Zona Centro, Uriangato, Gto.', '0', '-101.183', '20.1431'),
(49, 'Estacionamiento - Agustín Melgar', 7, 'estacionamiento', 'Agustín Melgar 11A, Zona Centro, Uriangato, Gto.', '0', '-101.182', '20.1426'),
(50, 'Estacionamiento - Café Chaquers', 7, 'estacionamiento', 'Calle Madero # 5, Zona Centro, Uriangato.', '0', '-101.179', '20.1406'),
(51, 'Estacionamiento - Madero', 7, 'estacionamiento', 'Calle Madero # 14-A, Zona Centro, Uriangato.', '0', '-101.179', '20.1404'),
(52, 'Estacionamiento - Bancomer', 7, 'estacionamiento', 'Blvd. José María Morelos 13, Zona Centro, Uriangato, Gto.', '0', '-101.178', '20.1405'),
(53, 'Estacionamiento de Autobuses Turísticos', 7, 'estacionamiento', 'Jardín Independencia 5, Zona Centro, Uriangato, Gto.', '0', '-101.179', '20.141'),
(54, 'Estacionamiento - Farmacia Guadalajara', 7, 'estacionamiento', 'Blvd. José María Morelos 97, Zona Centro, Uriangato, Gto.', '0', '-101.179', '20.1364'),
(55, 'Restaurante', 8, 'restaurante', 'null', '0', '-101.174', '20.1501'),
(56, 'Restaurante', 8, 'restaurante', 'null', '0', '-101.174', '20.1504'),
(57, 'Restaurante', 8, 'restaurante', 'null', '0', '-101.179', '20.1461'),
(58, 'Restaurante', 8, 'restaurante', 'null', '0', '-101.179', '20.1462'),
(59, 'Restaurante', 8, 'restaurante', 'null', '0', '-101.179', '20.1455'),
(60, 'Restaurante', 8, 'restaurante', 'null', '0', '-101.184', '20.1374'),
(61, 'La Quimera', 8, 'restaurante', 'null', '0', '-101.181', '20.1265'),
(62, 'Las Brasas', 8, 'restaurante', 'null', '0', '-101.18', '20.126'),
(63, 'Gastronómico Sonora', 8, 'restaurante', 'null', '0', '-101.18', '20.129'),
(64, 'Los Pinitos', 8, 'restaurante', 'null', '0', '-101.179', '20.1346'),
(65, 'Los Candiles', 8, 'restaurante', 'null', '0', '-101.179', '20.142'),
(66, 'TORTILLAS Y FONDA CHABE', 8, 'restaurante', 'null', '0', '-101.179', '20.138'),
(67, 'Pollo Feliz Leovino Zavala', 8, 'restaurante', 'null', '0', '-101.166', '20.1557'),
(68, 'Los Ahogados', 8, 'restaurante', 'null', '0', '-101.178', '20.1489'),
(69, 'Pizza Mía', 8, 'restaurante', 'null', '0', '-101.179', '20.1407'),
(70, 'La Taquería', 8, 'restaurante', 'null', '0', '-101.179', '20.1403'),
(71, 'RESTAURANTE DE MARISCOS EL ZARCO', 8, 'restaurante', 'null', '0', '-101.169', '20.1073'),
(72, 'Hotel Doral Plaza', 9, 'hotel', 'Calle 16 De Septiembre 13 Colonia Centro, Uriangato 38980 México', '0', '-101.181', '20.141'),
(73, 'Hotel Venecia', 9, 'hotel', 'Blvd. Leovino Zavala 3A Zona Centro, Lazaro Cardenas, 38980 Gto.', '0', '-101.175', '20.1499'),
(74, 'Hotel Diamante', 9, 'hotel', 'San Miguel, 38980 Uriangato, Guanajuato.', '445 457 6095', '-101.179', '20.1472'),
(75, 'Hotel San Marcos', 9, 'hotel', 'Av. 16 de Septiembre No.51, Zona Centro, 38980 Uriangato, Gto.', '445 458 5402', '-101.182', '20.1387'),
(76, 'Hotel Posada Familiar Romo', 9, 'hotel', 'Blvd. Leovino Zavala 505, Independencia, 38980 Uriangato, Gto.', '0', '-101.166', '20.1563'),
(77, 'Hotel las Vegas', 9, 'hotel', 'Av. José Luis Arévalo, Independencia, 38980 Uriangato, Gto.', '0', '-101.169', '20.1572'),
(78, 'Gasolinera', 10, 'gasolinera', 'Del Prado # 11 Esq, Juan Aldama, 38981 Uriangato, Gto.', '800 736 3900', '-101.175', '20.1478'),
(79, 'Gasolinera', 10, 'gasolinera', 'Av. Miguel Hidalgo 62, Zona Centro, 38980 Uriangato, Gto., México', '0', '-101.178', '20.146'),
(80, 'Pemex', 10, 'gasolinera', 'Av. Puebla 1194, Modelo, Uriangato, Gto., México', '0', '-101.181', '20.1256'),
(81, 'Gasolinera Morelos', 10, 'gasolinera', 'Blvd. José María Morelos 703, Centro, Uriangato, Gto., México.', '800 736 3900', '-101.18', '20.1285'),
(82, 'Gasolinera Torres', 10, 'gasolinera', 'Blvd. José María Morelos 90, Zona Centro, 38980 Uriangato, Gto., México.', '445 457 1148', '-101.179', '20.135'),
(83, 'Pemex Leovino Zavala', 10, 'gasolinera', 'De Leovino Zavala No. 202, Independencia, 38980 Uriangato, Gto.', '800 736 3900', '-101.163', '20.1578'),
(84, 'Pemex', 10, 'gasolinera', 'Blvd. Uriangato 501, Joyas del Pedregal, 38980 Uriangato, Gto.', '55 1944 2500', '-101.171', '20.1095'),
(92, ' Prueba 2', 11, 'otro', 'probando direcccion', '4564562', '-101.17881005899066', '20.141572738045515'),
(93, 'Prueba final', 11, 'lhakldsjfklajñfjaklñs', 'lajsdkfajlñksfjasjkld', '4451107150', '-51.6180165487737', '81.36741329479773'),
(94, 'Edwin', 11, 'Prueba con carga de permisos', 'probando la direccion', '4451107150', '-101.17887447335129', '20.147938561270315'),
(95, 'Prueba final 2', 11, 'Probando segunda descripcion', 'otra direccion para probar ', '4587243', '-101.17719755007353', '20.14211666345778'),
(96, 'Prueba final 3', 11, 'Probando segunda descripcion', 'otra direccion para probar ', '4587243', '-101.17714384387685', '20.141210120051838');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type`
--

CREATE TABLE `type` (
  `id_t` int(11) NOT NULL,
  `name_t` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `type`
--

INSERT INTO `type` (`id_t`, `name_t`) VALUES
(1, 'general'),
(2, 'hospitales'),
(3, 'bancos'),
(4, 'farmacias'),
(5, 'transportes'),
(6, 'WC'),
(7, 'estacionamientos'),
(8, 'restaurantes'),
(9, 'hoteles'),
(10, 'gasolineras'),
(11, 'otro'),
(16, 'Miguel'),
(17, 'EDwinMigue'),
(18, 'nueva prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `punto`
--
ALTER TABLE `punto`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `tipo_p` (`type_p`) USING BTREE;

--
-- Indices de la tabla `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_t`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `punto`
--
ALTER TABLE `punto`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `punto`
--
ALTER TABLE `punto`
  ADD CONSTRAINT `punto_ibfk_1` FOREIGN KEY (`type_p`) REFERENCES `type` (`id_t`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
