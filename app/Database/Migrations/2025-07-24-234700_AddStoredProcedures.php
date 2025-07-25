<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStoredProcedures extends Migration
{
    public function up()
    {
        // SP_SELECT_USUARIO - Get all users with related data
        $this->db->query("DROP PROCEDURE IF EXISTS SP_SELECT_USUARIO");
        $this->db->query("
            CREATE PROCEDURE SP_SELECT_USUARIO()
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
                    tbl_estado e ON u.est_id = e.est_id;
            END
        
        
        ");

        // SP_INSERT_USUARIO - Insert a new user
        $this->db->query("DROP PROCEDURE IF EXISTS SP_INSERT_USUARIO");
        $this->db->query("
            CREATE PROCEDURE SP_INSERT_USUARIO(
                IN p_nombre VARCHAR(125),
                IN p_cedula VARCHAR(50),
                IN p_correo VARCHAR(50),
                IN p_dep_id INT,
                IN p_ciu_id INT,
                IN p_pro_id INT,
                IN p_est_id INT
            )
            BEGIN
                INSERT INTO tbl_usuarios (
                    usu_nombre, 
                    usu_cedula, 
                    usu_correo, 
                    dep_id, 
                    ciu_id, 
                    pro_id, 
                    est_id
                ) VALUES (
                    p_nombre,
                    p_cedula,
                    p_correo,
                    p_dep_id,
                    p_ciu_id,
                    p_pro_id,
                    p_est_id
                );
            END
        
        
        ");

        // SP_DELETE_USUARIO - Delete a user by ID
        $this->db->query("DROP PROCEDURE IF EXISTS SP_DELETE_USUARIO");
        $this->db->query("
            CREATE PROCEDURE SP_DELETE_USUARIO(IN p_usu_id INT)
            BEGIN
                DELETE FROM tbl_usuarios WHERE usu_id = p_usu_id;
            END
        
        
        ");

        // SP_SELECT_USUARIO_BY_ID - Get a user by ID
        $this->db->query("DROP PROCEDURE IF EXISTS SP_SELECT_USUARIO_BY_ID");
        $this->db->query("
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
            END
        
        
        ");

        // SP_UPDATE_USUARIO - Update a user
        $this->db->query("DROP PROCEDURE IF EXISTS SP_UPDATE_USUARIO");
        $this->db->query("
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
                    est_id = p_est_id,
                    usu_fecha_modificacion = NOW()
                WHERE 
                    usu_id = p_usu_id;
            END
        
        
        ");
    }

    public function down()
    {
        $this->db->query("DROP PROCEDURE IF EXISTS SP_SELECT_USUARIO");
        $this->db->query("DROP PROCEDURE IF EXISTS SP_INSERT_USUARIO");
        $this->db->query("DROP PROCEDURE IF EXISTS SP_DELETE_USUARIO");
    }
}
