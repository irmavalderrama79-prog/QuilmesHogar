-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2024 a las 00:31:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quilmeshogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(20,2) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo`, `descripcion`, `precio`, `imagen`, `id_categoria`) VALUES
(2, 'Heladera', 'Texto de la Heladera\r\nEsto corresponde a la línea 2', '800000.00', 'heladera.jpg', 2),
(4, 'Cloud Lenovo 14\"', 'Cloudbook Lenovo Ip 1 14Igl05 Celeron N4120 4Gb 128Gb 14\" W11H (81Vu00Juar)\r\nProcesador Intel Celeron N4120 (4C/4T, 1,1/2,6 GHz, 4 MB)\r\nGráficos Intel UHD 600 integrados\r\nMemoria DDR4-2400 soldado de 4GB\r\nRanuras de memoria: Memoria soldada a la placa del sistema, sin ranuras\r\nMemoria máxima: Memoria soldada de 4GB, no actualizable\r\nAlmacenamiento SSD de 128 GB M.2 2242 PCIe 2.0x4 NVMe\r\nSoporte de almacenamiento: Una unidad, hasta SSD M.2 2242 de 256 GB o SSD M.2 2280 de 512 GB\r\nLector de tarjetas MicroSD\r\nÓptico Ninguno\r\nmicroprocesador de audio: Audio de alta definición (HD)\r\nAltavoces estéreo, 1,5 W x2, Dolby Audio\r\nCámara 0.3MP\r\nMicrófono 2x, matriz\r\nBatería Integrado 32Wh\r\nDuración máxima de la batería: MobileMark 2018: 8 horas\r\nAdaptador de corriente: Punta redonda de 45 W (2 pines, montaje en pared)\r\n\r\nPantalla 14\" HD (1366x768) TN 220nits Antirreflejo\r\nPantalla táctil Ninguno\r\nTeclado Sin retroiluminación, español (LA)\r\nColor de la caja Azul hielo\r\nTratamiento de superficies IMR (Decoración In-Mold por Rodillo)\r\nMaterial de la Caja PC + ABS (arriba), PC + ABS (abajo)\r\nDimensiones (An. x Pr. x Al.) 327,1 x 235 x 17,7-17,9 mm (12,88 x 9,25 x 0,69-0,7 pulgadas)\r\nPeso A partir de 1,4 kg (3,09 libras)\r\nSOFTWARE\r\nSistema operativo\r\nWindows 11 Home 64, Español\r\nSoftware incluido\r\nPrueba de oficina\r\nCONECTIVIDAD\r\nethernet Ninguno\r\nWiFi + Bluetooth 11ac, 2x2 + BT4.2\r\nPuertos estándar\r\n2x USB 3.2 Gen 1\r\n1xHDMI 1.4\r\n1x lector de tarjetas\r\n1 conector combinado de auriculares/micrófono (3,5 mm)\r\n1 conector de alimentación.\r\nSEGURIDAD Y PRIVACIDAD\r\nChip de seguridad\r\nFirmware TPM 2.0\r\nLector de huellas dactilares\r\nNinguno\r\nSERVICIO\r\nGarantía básica\r\n1 año, depósito\r\nActualización incluida\r\nNinguno\r\nCERTIFICACIONES\r\nCertificaciones Verdes\r\nENERGÍA ESTRELLA 8.0\r\nErP Lote 3\r\nRoHS', '1250321.00', 'Cloudbook Lenovo Ip 1 14Igl05 Celeron N4120 4Gb 128Gb 14 W11H.jpg', 3),
(5, 'COCINA MORELLI ZAFIRA 550', 'COCINA MORELLI ZAFIRA 550 - VISOR ACINOX REJAS VITRIF ENC ELECT V TEMPLADO\r\n\r\nDiseño\r\nEl Morelli Zafira 550 es un horno multigas con un elegante diseño en color acero inoxidable. Cuenta con 4 hornallas, rejas vitrificadas (aluminio + triple corona), perillas premium y válvula con seguridad.\r\nDimensiones\r\nSus medidas son 87 cm (alto) x 55 cm (ancho) x 65 cm (profundidad).\r\n\r\nEspecificaciones Técnicas\r\n\r\n* Mesada en Acero Inoxidable.\r\n* Laterales en Acero Inoxidable.\r\n* Rejillas de fundición vitrificadas livianas.\r\n* Bandeja anti derrame de acero inoxidable.\r\n* Válvula de seguridad en el horno.\r\n* Luz en horno.\r\n* Encendido eléctrico en hornallas y horno.\r\n* 3 Guías para parrillas en el horno.\r\n* 2 Parrillas para el horno.\r\n* Piso con ladrillos refractarios (6 unidades).\r\n* Puerta de horno visor de vidrio templado espejado.\r\n* 3 Hornallas redondas de aluminio con tapa vitrificada.\r\n* 1 Hornalla Triple Corona redonda de aluminio con tapa vitrificada.\r\n* 2 Mecheros de 1200 calorías.\r\n* 1 Mecheros de 1800 calorías.\r\n* 1 Mechero Triple Corona de 2500 calorías.\r\n* Horno grande de 3300 calorías.\r\n* Medidas aproximadas: Frente 55cm x Profundidad 62cm x Alto 87 cm.\r\n* Medidas aproximadas interiores: Frente 45 x Profundidad 50 x Alto 30cm.\r\n* Peso Aprox: 50 kg\r\nGarantía: 6 meses\r\n', '500000.00', 'COCINA MORELLI ZAFIRA 550 - VISOR ACINOX REJAS VITRIF ENC ELECT V TEMPLADO.jpg', 5),
(6, 'Anafe Franke FHM 705 GAS 5 H Blanco', 'ANAFE FRANKE-FHM 705 (1 triple corona)\r\nTerminación: Acero inoxidable\r\n\r\nMultigas\r\n\r\nValores caloríficos de los quemadores:\r\n\r\n1 quemador auxiliar – 1000 W (870Kcal)\r\n1 quemador rápido – 3000 W (2609 Kcal)\r\n2 quemadores semi rápidos – 1750 W (1522 Kcal) cada uno\r\nquemador triple interno – 700 W (609 Kcal) y externo – 2600 W ( 2261 Kcal)\r\nRejas de fundición\r\n\r\nEncendido electrónico a una mano\r\n\r\nVálvula de seguridad: Si\r\n\r\nSalida de gases: No\r\n\r\nMatrícula de Certificación: DC-B-I3-002.1\r\n', '298999.95', 'Anafe Franke FHM 705 GAS 5 H Blanco.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'TV'),
(2, 'Heladeras'),
(3, 'Notebooks'),
(4, 'Celulares'),
(5, 'Cocinas'),



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
