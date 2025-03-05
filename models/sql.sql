CREATE TABLE Contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Identificador único
    nombre VARCHAR(100) NOT NULL,      -- Nombre del contacto
    email VARCHAR(100) NOT NULL,        -- Correo electrónico
    telefono VARCHAR(20) NOT NULL,      -- Número de teléfono
    servicio VARCHAR(100) NOT NULL,     -- Servicio seleccionado
    mensaje TEXT NOT NULL,              -- Mensaje del contacto
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Fecha de registro
);

CREATE TABLE Emails (
    id INT AUTO_INCREMENT PRIMARY KEY,   
    email VARCHAR(100) NOT NULL,        -- Correo electrónico
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Fecha de registro
);

DELIMITER // 
CREATE PROCEDURE RegistrarContacto(
    IN p_nombre VARCHAR(100),
    IN p_email VARCHAR(100),
    IN p_telefono VARCHAR(20),
    IN p_servicio VARCHAR(100),
    IN p_mensaje TEXT
)
BEGIN
    -- Insertar los datos en la tabla Contacto
    INSERT INTO Contacto (nombre, email, telefono, servicio, mensaje)
    VALUES (p_nombre, p_email, p_telefono, p_servicio, p_mensaje);
END // 
DELIMITER ;



 

DELIMITER // 
CREATE PROCEDURE registrarCorreosPublicidad( 
    IN p_email VARCHAR(100)
)
BEGIN
    -- Insertar los datos en la tabla Email
    INSERT INTO Emails (email)
    VALUES (p_email);
END // 
DELIMITER ;