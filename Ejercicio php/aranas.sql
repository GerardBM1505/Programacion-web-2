DROP DATABASE IF EXISTS `ARANAS`;
CREATE DATABASE IF NOT EXISTS `ARANAS` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `ARANAS`;

CREATE TABLE `clasificacion` (
    `id_araña` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre_comun` TEXT COLLATE utf8mb4_spanish2_ci NOT NULL,
    `nombre_cientifico` TEXT COLLATE utf8mb4_spanish2_ci NOT NULL,
    `orden` TEXT COLLATE utf8mb4_spanish2_ci NOT NULL,
    `peligro_humano` ENUM('Si', 'No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO `clasificacion` (`nombre_comun`, `nombre_cientifico`, `orden`, `peligro_humano`) 
VALUES 
('Viuda Negra', 'Latrodectus', 'Araneae', 'Si'),
('Tarántula', 'Theraphosidae', 'Araneae', 'No'),
('Saltarina', 'Salticidae', 'Araneae', 'No'),
('Violinista', 'Loxosceles', 'Aranae', 'Si');