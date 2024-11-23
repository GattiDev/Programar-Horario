--
-- Base de datos: `schedule_time`
--
CREATE DATABASE schedule_time;
USE schedule_time;

--
-- Estructura de tabla para la tabla `schedule_time`
--
create table schedule_time(
	id          int auto_increment not null,
    single      int not null,
    superior    int not null,
    doble       int not null,
    triple      int not null,
    cuadruple   int not null,
    quintuple   int not null,
    sextuple    int not null,
    siesta      int not null,
    mascota     int not null,
    cochera     int not null,
    date        date not null,
    hour 	    time not null,
    constraint pk_scheduleTime primary key(id)
) engine = InnoDB;

INSERT INTO `schedule_time` (`id`, `single`, `superior`, `doble`, `triple`, `cuadruple`, `quintuple`, `sextuple`, `siesta`, `mascota`, `cochera`, `date`, `hour`) VALUES (NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '00:00');

--
-- Estructura de tabla para la tabla `show_data`
--
create table show_data(
	id          int auto_increment not null,
    single      int not null,
    superior    int not null,
    doble       int not null,
    triple      int not null,
    cuadruple   int not null,
    quintuple   int not null,
    sextuple    int not null,
    siesta      int not null,
    mascota     int not null,
    cochera     int not null,
    statu       varchar(3),
    constraint pk_show_data primary key(id),
    constraint uq_statu unique(statu)
) engine = InnoDB;

INSERT INTO `show_data` (`id`, `single`, `superior`, `doble`, `triple`, `cuadruple`, `quintuple`, `sextuple`, `siesta`, `mascota`, `cochera`, `statu`) VALUES (NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '');
