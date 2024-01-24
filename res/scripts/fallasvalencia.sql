/* Creamos la base de datos fallas de valencia */
CREATE DATABASE fallas_valencia;
/* DROP DATABASE fallas_valencia; */

/* creamos la tabla fallas */
CREATE TABLE fallas (
    id_falla INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(64),
    fecha_fundacion DATE,
    presupuesto FLOAT
);


/* creamos la tabla falleros */
CREATE TABLE falleros (
    dni VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(16),
    apellidos VARCHAR(32),
    cuota FLOAT
);

/* creamos la tabla monumentos, para los monumentos falleros */
CREATE TABLE monumentos (
    id_monumento INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(32),
    lema VARCHAR(255),
    presupuesto FLOAT,
    anyo_creacion INT
);


/* añadimos las claves agenas */

/* una falla puede tener muchos falleros */
ALTER TABLE falleros
ADD COLUMN id_falla INT,
ADD FOREIGN KEY (id_falla) REFERENCES fallas(id_falla);

/* una falla puede tener muchos monumenos falleros */
ALTER TABLE monumentos
ADD COLUMN id_falla INT,
ADD FOREIGN KEY (id_falla) REFERENCES fallas(id_falla);


/* añadimos datos a las tablas */ 

/* creamos fallas */
INSERT INTO fallas (nombre, fecha_fundacion, presupuesto)
VALUES
    ("Falla de la Plaza del Ayuntamiento", "1990-03-15", 150000.00),
    ("Falla de Convento Jerusalén-Matemático Marzal", "1985-06-20", 180000.00),
    ("Falla de Na Jordana", "1995-02-10", 130000.00),
    ("Falla de Sueca-Literato Azorín", "1980-07-05", 160000.00),
    ("Falla de Cuba-Literato Azorín", "1998-11-25", 145000.00),
    ("Falla de L'Antiga de Campana", "1987-09-18", 175000.00),
    ("Falla de Almirante Cadarso-Conde de Altea", "1993-04-30", 140000.00),
    ("Falla de Exposición-Micer Mascó", "1982-08-12", 155000.00),
    ("Falla de la Plaza del Pilar", "1991-01-08", 170000.00),
    ("Falla Gayano Lluch", "1989-12-02", 65000.00);

/* creamos falleros */
INSERT INTO falleros (nombre, apellidos, dni, cuota, id_falla)
VALUES
    ("Juan", "García Pérez", "12345678A", 250, 2),
    ("María", "Martínez López", "23456789B", 280, 5),
    ("Carlos", "Fernández Sánchez", "34567890C", 300, 2),
    ("Laura", "López Rodríguez", "45678901D", 220, 6),
    ("Pedro", "Sánchez González", "56789012E", 270, 7),
    ("Ana", "Gómez Martínez", "67890123F", 290, 8),
    ("David", "Rodríguez Fernández", "78901234G", 240, 1),
    ("Elena", "Pérez García", "89012345H", 260, 9),
    ("Luis", "González Sánchez", "90123456I", 320, 2),
    ("Isabel", "Fernández Martínez", "01234567J", 310, 6),
    ("Marta", "Gómez Rodríguez", "12345678X", 230, 2),
    ("Javier", "Pérez López", "23456789Y", 260, 5),
    ("Sofía", "González Fernández", "34567890Z", 290, 1),
    ("Ricardo", "Martínez García", "45678901A", 310, 7),
    ("Lorena", "Fernández Pérez", "56789012B", 280, 9),
    ("Daniel", "Sánchez González", "67890123C", 250, 10),
    ("Carmen", "Rodríguez Martínez", "78901234D", 300, 10),
    ("Alberto", "López Fernández", "89012345E", 240, 2),
    ("Natalia", "Martínez Sánchez", "90123456F", 270, 1),
    ("José", "Gómez Pérez", "01234567G", 320, 1),
    ("Eduardo", "Martínez García", "12345378X", 280, 10),
    ("Lucía", "González Pérez", "23456784Y", 260, 2),
    ("Manuel", "Sánchez Fernández", "34517890Z", 250, 3),
    ("Adriana", "Pérez López", "45678905A", 290, 5),
    ("Sergio", "López Martínez", "56789312B", 320, 6),
    ("Marina", "Gómez Rodríguez", "67893123C", 240, 7),
    ("Andrés", "Fernández Sánchez", "78301234D", 300, 8),
    ("Elena", "González Martínez", "89032345E", 270, 2),
    ("David", "Rodríguez López", "90123356F", 310, 7),
    ("Carla", "Martínez Pérez", "01234537G", 330, 10);

/* Creamos monumentos falleros */
INSERT INTO monumentos (nombre, lema, presupuesto, anyo_creacion, id_falla)
VALUES
    ("La diversidad", "La unidad en la diversidad es el lema de este monumento creado por el escultor Xavi Esteve", 12000.00, 2022, 1),
    ("La simplicidad", "La belleza en la simplicidad, el monumento creado por el escultor Carlos Sánchez", 15000.00, 2021, 4),
    ("La pobreza", "La lucha contra la pobreza empieza con nosotros creado por Ana García", 18000.00, 2020, 3),
    ("Los dinosaurios", "Cuando los dinosaurios dominaban la Tierra creado por Elena Pérez", 13000.00, 2019, 6),
    ("VCF", "Pasión Valencianista, Corazón en Cada Partido de Pau Puig", 16000.00, 2018, 7),
    ("Los viajes", "evoca la emoción de los viajes y la exploración, celebrando la aventura y la curiosidad por descubrir nuevos lugares", 14000.00, 2017, 8),
    ("Nuestros mayores", "destaca la sabiduría y la ternura de la experiencia acumulada por nuestros mayores a lo largo de los años", 17000.00, 2016, 3),
    ("El deporte", "compromiso en el mundo del deporte, celebrando el esfuerzo y la dedicación de los atletas y los amantes del deporte. ", 19000.00, 2015, 10),
    ("Los políticos", "naturaleza humorística y satírica de la política en el contexto de las Fallas, donde se critican de manera humorística los eventos políticos y sociales actuales.", 12500.00, 2014, 10),
    ("Las obras", "El barrio en obras. Ruido, caos para llegar a la prosperidad y las mejoras en nuestra ciudad", 13500.00, 2013, 2);





