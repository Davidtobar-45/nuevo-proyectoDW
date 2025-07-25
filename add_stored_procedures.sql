-- Eliminar los procedimientos si ya existen
DROP PROCEDURE IF EXISTS SP_SELECT_USUARIO_BY_ID;
DROP PROCEDURE IF EXISTS SP_UPDATE_USUARIO;

-- Cambiar el delimitador para poder crear procedimientos
DELIMITER //

-- Procedimiento para obtener un usuario por su ID
CREATE PROCEDURE SP_SELECT_USUARIO_BY_ID(IN p_usu_id INT)
BEGIN
    SELECT 
        u.usu_id,
        u.usu_nombre,
        u.usu_cedula,
        u.usu_correo,
        u.dep_id,
        d.dep_nombre AS departamento,
        u.ciu_id,
        c.ciu_nombre AS ciudad,
        u.pro_id,
        p.pro_nombre AS provincia,
        u.est_id,
        e.est_nombre AS estado
    FROM 
        tbl_usuarios u
    LEFT JOIN 
        tbl_departamento d ON u.dep_id = d.dep_id
    LEFT JOIN 
        tbl_ciudad c ON u.ciu_id = c.ciu_id
    LEFT JOIN 
        tbl_provincia p ON u.pro_id = p.pro_id
    LEFT JOIN 
        tbl_estado e ON u.est_id = e.est_id
    WHERE 
        u.usu_id = p_usu_id;
END //

-- Procedimiento para actualizar un usuario
CREATE PROCEDURE SP_UPDATE_USUARIO(
    IN p_usu_id INT,
    IN p_usu_nombre VARCHAR(100),
    IN p_usu_cedula VARCHAR(20),
    IN p_usu_correo VARCHAR(100),
    IN p_dep_id INT,
    IN p_ciu_id INT,
    IN p_pro_id INT,
    IN p_est_id INT
)
BEGIN
    UPDATE tbl_usuarios
    SET 
        usu_nombre = p_usu_nombre,
        usu_cedula = p_usu_cedula,
        usu_correo = p_usu_correo,
        dep_id = p_dep_id,
        ciu_id = p_ciu_id,
        pro_id = p_pro_id,
        est_id = p_est_id
    WHERE 
        usu_id = p_usu_id;
END //

-- Restaurar el delimitador
DELIMITER ;
