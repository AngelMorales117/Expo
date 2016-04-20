-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2016 a las 03:17:50
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lacarpinteriasv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `Id_accion` int(11) NOT NULL,
  `accion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `Id_bitacora` int(11) NOT NULL,
  `Id_accion` int(11) NOT NULL,
  `descripcion` varchar(140) NOT NULL,
  `Id_personal` int(11) NOT NULL,
  `fechaBitacora` date NOT NULL,
  `horaBitacora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `Id_blog` int(11) NOT NULL,
  `titulo` varchar(35) NOT NULL,
  `encabezado` varchar(200) NOT NULL,
  `cuerpo` varchar(5000) NOT NULL,
  `fehcaIngreso` date NOT NULL,
  `horaIngreso` time NOT NULL,
  `estadoBlog` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `Id_calificacion` int(11) NOT NULL,
  `calificacion` tinyint(1) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `Id_cargo` int(11) NOT NULL,
  `cargos` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `Id_carrito` int(11) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL,
  `cantidadCarrito` int(11) NOT NULL,
  `estadoCarrito` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id_categoria` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_cliente` int(11) NOT NULL,
  `nombreCliente` varchar(25) NOT NULL,
  `apellidoCliente` varchar(25) NOT NULL,
  `contraCliente` varchar(200) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `horaIngreso` time NOT NULL,
  `estadoCliente` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactocliente`
--

CREATE TABLE `contactocliente` (
  `Id_contactoCliente` int(11) NOT NULL,
  `contactoCliente` varchar(140) NOT NULL,
  `Id_tipoContacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactopersonal`
--

CREATE TABLE `contactopersonal` (
  `Id_contactopersonal` int(11) NOT NULL,
  `Id_tipoContacto` int(11) NOT NULL,
  `contactoPersonal` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `Id_cotizacion` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL,
  `imagenCotizacion` varchar(200) DEFAULT NULL,
  `cotizacion` varchar(1000) NOT NULL,
  `estadoCotizacion` tinyint(1) NOT NULL DEFAULT '1',
  `horaIngreso` time NOT NULL,
  `fechaIngreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Id_factura` int(11) NOT NULL,
  `Id_carrito` int(11) NOT NULL,
  `fechaCompra` date NOT NULL,
  `horaCompra` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `immagenproductos`
--

CREATE TABLE `immagenproductos` (
  `Id_imagenProducto` int(11) NOT NULL,
  `imagemProducto` varchar(200) NOT NULL,
  `prioridad` tinyint(1) DEFAULT '1',
  `Id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `Id_inventario` int(11) NOT NULL,
  `material` varchar(35) NOT NULL,
  `cantidadMaterial` int(11) NOT NULL,
  `precioMaterial` decimal(10,2) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `horaIngreso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `Id_modulo` int(11) NOT NULL,
  `permiso` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notaspedidos`
--

CREATE TABLE `notaspedidos` (
  `Id_nota` int(11) NOT NULL,
  `notaPedido` varchar(500) NOT NULL,
  `Id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_pedido` int(11) NOT NULL,
  `Id_carrito` int(11) NOT NULL,
  `fechaEntrega` date NOT NULL,
  `fechaInicio` date NOT NULL,
  `Id_personal` int(11) NOT NULL,
  `estadoPedido` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `Id_permiso` int(11) NOT NULL,
  `Id_cargo` int(11) NOT NULL,
  `Id_modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Id_personal` int(11) NOT NULL,
  `nombrePersonal` varchar(35) NOT NULL,
  `apellidoPersonal` varchar(35) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `correoPersonal` varchar(140) NOT NULL,
  `Id_cargo` int(11) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `horaIngreso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `nombreProdu` varchar(30) NOT NULL,
  `miniDescrip` varchar(35) DEFAULT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `Id_subcategoria` int(11) NOT NULL,
  `estadoProducto` tinyint(1) NOT NULL DEFAULT '1',
  `fechaIngreso` date NOT NULL,
  `horaIngreso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `Id_quienes` int(11) NOT NULL,
  `mision` varchar(500) NOT NULL,
  `vision` varchar(500) NOT NULL,
  `valores` varchar(500) NOT NULL,
  `objetivos` varchar(500) NOT NULL,
  `servicio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `Id_subcategoria` int(11) NOT NULL,
  `subcategoria` varchar(20) NOT NULL,
  `Id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontacto`
--

CREATE TABLE `tipocontacto` (
  `Id_tipoContacto` int(11) NOT NULL,
  `tipoContacto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`Id_accion`),
  ADD UNIQUE KEY `accion` (`accion`);

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`Id_bitacora`),
  ADD KEY `Id_accion` (`Id_accion`),
  ADD KEY `Id_personal` (`Id_personal`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`Id_blog`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD UNIQUE KEY `encabezado` (`encabezado`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`Id_calificacion`),
  ADD KEY `Id_cliente` (`Id_cliente`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id_cargo`),
  ADD UNIQUE KEY `cargos` (`cargos`);

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`Id_carrito`),
  ADD KEY `Id_producto` (`Id_producto`),
  ADD KEY `Id_cliente` (`Id_cliente`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_categoria`),
  ADD UNIQUE KEY `categoria` (`categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD PRIMARY KEY (`Id_contactoCliente`),
  ADD UNIQUE KEY `contactoCliente` (`contactoCliente`),
  ADD KEY `Id_tipoContacto` (`Id_tipoContacto`);

--
-- Indices de la tabla `contactopersonal`
--
ALTER TABLE `contactopersonal`
  ADD PRIMARY KEY (`Id_contactopersonal`),
  ADD UNIQUE KEY `contactoPersonal` (`contactoPersonal`),
  ADD KEY `Id_tipoContacto` (`Id_tipoContacto`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`Id_cotizacion`),
  ADD KEY `Id_cliente` (`Id_cliente`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Id_factura`),
  ADD KEY `Id_carrito` (`Id_carrito`);

--
-- Indices de la tabla `immagenproductos`
--
ALTER TABLE `immagenproductos`
  ADD PRIMARY KEY (`Id_imagenProducto`),
  ADD UNIQUE KEY `imagemProducto` (`imagemProducto`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`Id_inventario`),
  ADD UNIQUE KEY `material` (`material`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`Id_modulo`),
  ADD UNIQUE KEY `permiso` (`permiso`);

--
-- Indices de la tabla `notaspedidos`
--
ALTER TABLE `notaspedidos`
  ADD PRIMARY KEY (`Id_nota`),
  ADD KEY `Id_pedido` (`Id_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id_pedido`),
  ADD KEY `Id_carrito` (`Id_carrito`),
  ADD KEY `Id_personal` (`Id_personal`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`Id_permiso`),
  ADD KEY `Id_modulo` (`Id_modulo`),
  ADD KEY `Id_cargo` (`Id_cargo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id_personal`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correoPersonal` (`correoPersonal`),
  ADD KEY `Id_cargo` (`Id_cargo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`),
  ADD UNIQUE KEY `nombreProdu` (`nombreProdu`),
  ADD KEY `Id_subcategoria` (`Id_subcategoria`);

--
-- Indices de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  ADD PRIMARY KEY (`Id_quienes`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`Id_subcategoria`),
  ADD UNIQUE KEY `subcategoria` (`subcategoria`),
  ADD KEY `Id_categoria` (`Id_categoria`);

--
-- Indices de la tabla `tipocontacto`
--
ALTER TABLE `tipocontacto`
  ADD PRIMARY KEY (`Id_tipoContacto`),
  ADD UNIQUE KEY `tipoContacto` (`tipoContacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `Id_accion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `Id_bitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `Id_blog` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `Id_calificacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `Id_cargo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `Id_carrito` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  MODIFY `Id_contactoCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactopersonal`
--
ALTER TABLE `contactopersonal`
  MODIFY `Id_contactopersonal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `Id_cotizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `Id_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `immagenproductos`
--
ALTER TABLE `immagenproductos`
  MODIFY `Id_imagenProducto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `Id_inventario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `Id_modulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notaspedidos`
--
ALTER TABLE `notaspedidos`
  MODIFY `Id_nota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `Id_permiso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `Id_personal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `Id_quienes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `Id_subcategoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipocontacto`
--
ALTER TABLE `tipocontacto`
  MODIFY `Id_tipoContacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `bitacoras_ibfk_1` FOREIGN KEY (`Id_accion`) REFERENCES `acciones` (`Id_accion`),
  ADD CONSTRAINT `bitacoras_ibfk_2` FOREIGN KEY (`Id_personal`) REFERENCES `personal` (`Id_personal`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`Id_cliente`) REFERENCES `clientes` (`Id_cliente`),
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`);

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`),
  ADD CONSTRAINT `carritos_ibfk_2` FOREIGN KEY (`Id_cliente`) REFERENCES `clientes` (`Id_cliente`);

--
-- Filtros para la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD CONSTRAINT `contactocliente_ibfk_1` FOREIGN KEY (`Id_tipoContacto`) REFERENCES `tipocontacto` (`Id_tipoContacto`);

--
-- Filtros para la tabla `contactopersonal`
--
ALTER TABLE `contactopersonal`
  ADD CONSTRAINT `contactopersonal_ibfk_1` FOREIGN KEY (`Id_tipoContacto`) REFERENCES `tipocontacto` (`Id_tipoContacto`);

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_ibfk_1` FOREIGN KEY (`Id_cliente`) REFERENCES `clientes` (`Id_cliente`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Id_carrito`) REFERENCES `carritos` (`Id_carrito`);

--
-- Filtros para la tabla `immagenproductos`
--
ALTER TABLE `immagenproductos`
  ADD CONSTRAINT `immagenproductos_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`);

--
-- Filtros para la tabla `notaspedidos`
--
ALTER TABLE `notaspedidos`
  ADD CONSTRAINT `notaspedidos_ibfk_1` FOREIGN KEY (`Id_pedido`) REFERENCES `pedidos` (`Id_pedido`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_carrito`) REFERENCES `carritos` (`Id_carrito`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`Id_personal`) REFERENCES `personal` (`Id_personal`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`Id_modulo`) REFERENCES `modulos` (`Id_modulo`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`Id_cargo`) REFERENCES `cargos` (`Id_cargo`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`Id_cargo`) REFERENCES `cargos` (`Id_cargo`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_subcategoria`) REFERENCES `subcategorias` (`Id_subcategoria`);

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
