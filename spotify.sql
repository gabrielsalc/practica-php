-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 19:52:59
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spotify`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `artista` varchar(64) NOT NULL,
  `genero` varchar(64) NOT NULL,
  `fecha` varchar(64) NOT NULL,
  `portada` varchar(128) NOT NULL,
  `pista` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id`, `nombre`, `artista`, `genero`, `fecha`, `portada`, `pista`) VALUES
(7, 'The Scientist', 'Coldplay', 'Rock', '2001', 'A rush of blood to the head.jpg', 'Coldplay   The Scientist (1).mp3'),
(8, 'trouble', 'cage the elephant', 'rock', '2016', '072082bec92de939df4ffaeb066d334d90fa9cb8.jpg', 'Cage The Elephant   Trouble32.mp3'),
(9, 'Mia', 'Bad Bunny ft. Drake', 'Trap', '2018', 'Bad-Bunny-Eres-Mia-500x500.jpg', 'Bad Bunny feat. Drake   Mia ( Audio Oficial ) (1).mp3'),
(13, 'Sonderling', 'Zonderling', 'Progressive', '2016', 'zonderling-sonderling-2016-edit-extended-mix.jpg', 'Zonderling Sonderling (Original Mix)[1] (1).mp3'),
(14, 'Like a Stone', 'Audioslave', 'Rock', '2003', 'MV5BYjEzNWRhZmItOWE4Zi00MGM2LTk1ZjktZGQyMDc1ZWNjMDI3XkEyXkFqcGdeQXVyNTk1NTMyNzM@._V1_.jpg', 'Audioslave   Like a Stone (Official Audio)[1] (1).mp3'),
(15, 'A Sky Full Of Stars', 'Coldplay', 'Rock', '2011', 'coldplay-ghost-stories.jpg', 'Coldplay   A Sky Full Of Stars (Official Audio).mp3'),
(16, 'Breezeblocks', 'Alt-J', 'Rock', '2012', '30284b6d6be564f6c1d95a289d2d1737.1000x1000x1.jpg', 'alt J (âˆ†) Breezeblocks.mp3'),
(17, 'Wake Me Up', 'Avicii', 'House', '2013', 'Avicii-Wake_Me_Up_(CD_Single)-Frontal.jpg', 'wake me up.mp3'),
(18, 'Get Lucky', 'Daft Punk', 'Funk', '2013', 'Daft_Punk-Get_Lucky_(Featuring_Pharrell_Williams)_(CD_Single)-Frontal.jpg', 'Daft Punk   Get Lucky (Official Audio) ft. Pharrell Williams, Nile Rodgers (1).mp3'),
(19, 'Bohemian Rhapsody', 'Queen', 'Muchos', '1975', '51an+uz6PAL._SY355_.jpg', 'Queen   Bohemian Rhapsody (Official Audio) (1).mp3'),
(20, 'Das Model', 'Kraftwerk', 'Electro', '1978', '61oDamWXADL._SX355_.jpg', 'Kraftwerk   Das Model (1).mp3'),
(21, 'El amante', 'Nicky Jam', 'Reggaeton', '2017', 'UhUyTWe.jpg', 'El Amante   Nicky Jam (Audio Oficial)  (Ãlbum FÃ©nix) (1).mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `fecha` date NOT NULL,
  `master` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `fecha`, `master`) VALUES
(1, 'spotify', '9aeab829e27266990f352631530f9f8d', 'spotify@spotify.com', '2018-11-01', 1),
(19, 'gabriel', '7a79437937fc6f3517194795302f6bd0', 'gabrielsalcedo.gs@gmail.com', '0000-00-00', 0),
(20, 'joaquin', '7a79437937fc6f3517194795302f6bd0', 'asjldlaÃ±sdlasd', '0000-00-00', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
