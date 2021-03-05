-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2020 a las 04:26:36
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movilshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `email`, `nombre`, `direccion`, `telefono`) VALUES
(1, '', 'Vittoriano Jiménez', 'Guatire Estado Miranda Calle F cas F1A', 2147483647),
(2, 'willianj@hotmail.com', 'Willian Jiménez', 'asdfijaskldfjasdofjasiodfjioaw', 424122375),
(3, 'flomarizta@gmail.com', 'Flor parucho', 'chile apartamento 3a\r\n', 45867183),
(4, 'vittoriano@gmail.com', 'vittoriano fiore', 'calle f', 424122373),
(5, '', '', '', 0),
(6, 'belen.fiore@hotmail.com', 'Belen Fiore ', 'calle f casa f1a\r\n', 2147483647),
(7, '', '', '', 0),
(8, '', '', '', 0),
(9, '', '', '', 0),
(10, 'vittojf@gmail.com', 'Vittoriano JImenez', 'calle f', 2147483647),
(11, 'jimenez@gmail.comn', 'vittoriano', 'asdfjasdlkfj\r\n', 42516813),
(12, 'jiemasdflj@gmail.om', 'vittoriano', 'awdfsdf\r\n', 123123),
(13, 'sadfew@hotmail.com', 'asdfwe', 'asdfasdf', 123123),
(14, 'luissana@gmail.com', 'Luissana', 'guatire ', 2147483647),
(15, 'vector@gmail.com', ' vittoriano ', 'calle f cas f1qa', 424126874),
(16, 'andrea@gmail.com', 'andrea parejo', 'asldkfjasdiofcumana\r\n', 126858946),
(17, '', '', '', 0),
(18, '', '', '', 0),
(19, 'camari@gmail.com', 'carmari barreto', 'chile\r\n', 42159846),
(20, '', '', '', 0),
(21, '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `idProd` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `subTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`idProd`, `idVenta`, `cantidad`, `precio`, `subTotal`) VALUES
(16, 167, 1, 900, 900),
(16, 168, 1, 900, 900),
(17, 169, 1, 829, 829),
(15, 170, 1, 326, 326),
(15, 171, 1, 326, 326),
(14, 172, 1, 699, 699),
(24, 173, 1, 35, 35),
(14, 174, 1, 699, 699),
(24, 175, 1, 35, 35),
(14, 176, 1, 699, 699),
(24, 177, 1, 35, 35),
(14, 178, 1, 699, 699),
(24, 179, 1, 35, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombrep` varchar(100) NOT NULL,
  `marca` text CHARACTER SET utf8 NOT NULL,
  `descrip` varchar(255) CHARACTER SET utf8 NOT NULL,
  `precio` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombrep`, `marca`, `descrip`, `precio`, `img`, `tipo`) VALUES
(1, 'Xiaomi Redmi 9s', 'Xiaomi', 'Pantalla: 6.67\", 1080 x 2400 pixels, Procesador: Snapdragon 720G 2.3GHz, RAM: 4GB/6GB, Almacenamiento: 64GB/128GB, Expansión: microSD, Cámara: Cuádruple, 48MP+8MP +5MP+2MP, Batería: 5020 mAh, OS: Android 10, Perfil: 8.8 mm, Peso: 209 g', 250, 'red9.jpg', 'telefono'),
(14, 'Iphone 11 64gb', 'Apple', 'Pantalla: 6.1\", 828 x 1792 pixels , Procesador: Apple A13 Bionic , RAM: 4GB ,Almacenamiento: 64GB, Cámara: Dual, 12MP+12MP, Batería: 3046 mAh, OS: iOS 13, Perfil: 8.3 mm, Peso: 194 g', 699, 'iphone11.jpg', 'telefono'),
(15, 'Samsung Galaxy A51', 'Samsung', 'Pantalla: 6.5\", 1080 x 2400 pixels, Procesador: Exynos 9611 2.3GHz, RAM: 4GB/6GB/8GB, Almacenamiento: 64GB/128GB, Expansión: microSD, Cámara: Cuádruple, 48MP+12MP +5MP+5MP, Batería: 4000 mAh, OS: Android 9.0, Perfil: 7.9 mm, Peso: 172 g', 326, 'a51.jpg', 'telefono'),
(16, 'Google Pixel 4 XL', 'Google', 'Pantalla: 6.3\", 1440 x 3040 pixels, Procesador: Snapdragon 855 2.84GHz, RAM: 6GB, Almacenamiento: 64GB/128GB, Expansión: sin microSD, Cámara: Dual, 12MP+16MP, Batería: 3700 mAh, OS: Android 10, Perfil: 8.2 mm, Peso: 193 g', 900, 'pixel.jpg', 'telefono'),
(17, 'Iphone 10 64GB', 'apple', 'Pantalla: 5.8\", 1125 x 2436 pixels, Procesador: Apple A11 Bionic, RAM: 3GB, Almacenamiento: 64GB, Expansión: sin microSD, Cámara: 12 MP, Dual, Batería: 2700 mAh, OS: iOS 11, Perfil: 7.7 mm, Peso: 174 g', 829, 'iphonex.jpg', 'telefono'),
(18, 'Xiaomi Mi 10 128GB', 'Xiaomi', 'Pantalla: 6.47\", 1080 x 2340 pixels, Procesador: Snapdragon 730G 2.2GHz, RAM: 6GB, Almacenamiento: 128GB, Expansión: sin microSD, Cámara: Penta, 108MP+5MP +12MP+20MP+2MP, Batería: 5260 mAh, OS: Android 9.0, Perfil: 9.7 mm, Peso: 208 g', 514, 'red10.jpg', 'telefono'),
(19, 'Cargador Tipo C', 'cargador', 'CARGADOR CARGA RAPIDA DE PARED USB TYPE-C HUAWEI P20 / P10 / P9 / MATE 10 / NEXUS / NOVA HW-050300U00 / HW-059200CHQ CAPACIDAD: 5V - 2.0 / 9V - 2A', 10, 'cargador.jpg', 'accesorio '),
(20, 'Forro Iphone X - Xs', 'forro', 'Tecnología IMD (In-Mold-Decoration). El color se imprimió bajo una capa de PET. Hace que la impresión sea vívida y no se desvanezca.', 9, '41vmzqRleQL.jpg', 'accesorio'),
(21, 'Audifonos Samsung Buds', 'audifono', 'Versión Bluetooth: Bluetooth v5.0 (LE hasta 2 Mbps),   Compatibilidad con Smartphone. Android 5.0 , 1.5GB.  Sensores Acelerómetro, Sensor Hall, Sensor de proximidad, Peso, 6 g, Capacidad de  58 mAh, Hasta 6 Horas de uso ', 118, 'audifonosamsung.jpg', 'accesorio'),
(22, 'Audífonos i9s', 'audifono', 'Tecnología de cancelación de ruidos Micrófono de alta sensibilidad Batería de larga duración con cargador portátil incorporada en Batería de uso prolongado hasta 1 a 2 horas de tiempo de conversación/juego de alta calidad (carga completa aproximadamente d', 10, '7-2.jpg', 'accesorio'),
(23, 'Forro S20 PLus', 'forro', 'La funda de silicona Samsung Galaxy S20 Plus es duradera y fácil de sostener para proteger sin sacrificar el estilo. La cubierta diseñada con precisión está hecha de silicona suave al tacto, lo que proporciona un excelente agarre y protección con un volum', 20, '1000227333_sd.jpg', 'accesorio'),
(24, 'Forro Iphone 11 pro', 'forro', 'Diseñada por Apple para complementar el iPhone 11 Pro, la forma de la funda de silicona se ajusta perfectamente a los botones de volumen, los botones laterales y las curvas de su dispositivo sin agregar volumen. Un forro de microfibra suave en el interior', 35, 'APMWYM2FE_apple_iphone_11_pro_silicone_case_pink_sand.jpg', 'accesorio'),
(25, 'Forro Redmi 8 ', 'forro', 'Funda exclusiva para tu smartphone Xiaomi Redmi 8, Diseño funcional para proteger su teléfono inteligente de arañazos o golpes, Material de alta calidad y resistencia que brinda mayor protección a tu dispositivo', 7, 'xiaomi8forro.jpg', 'accesorio'),
(26, 'Forro Mi note 10', 'forro', 'Compatible con Xiaomi Mi Note 10 / Mi Note 10 Pro / Mi CC9 Pro El exterior resistente proporciona un mayor control de agarre para un manejo cómodo.  Diseñado para el uso impecable de la pantalla AMOLED curvada 3D de 6.47 \"y la cámara cuádruple. El estuche', 13, 'forronote10.jpg', 'accesorio'),
(27, 'Forro Iphone Xs', 'forro', 'Estas fundas diseñadas por Apple se adaptan perfectamente a las curvas del iPhone sin abultar nada de nada. Están fabricadas en piel francesa curtida y teñida con un proceso especial, son suaves al tacto y adquieren un tono natural con el tiempo. El forro', 30, 'MRWK2.jpg', 'accesorio'),
(28, 'Forro Google Pixel 5', 'forro', 'Los materiales de la funda del Pixel 5 es reciclado, incluida la tela, que se fabrica a partir de botellas de plástico. Puedes dejar la funda puesta para cargar el teléfono con el Pixel Stand o para cargar los Pixel Buds mediante la función Compartir bate', 40, 'googlepixelforro.jpg', 'accesorio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idProd` (`idProd`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
