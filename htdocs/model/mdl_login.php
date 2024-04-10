<?php
//SE FUSIONAN 2 ARCHIVOS LA BD CON NUESTRO ARCHIVO DE LOGIN
include 'db_con.php';

class access
{
    private $db;
    private $dbconnection;
    private $lista;

    //ASIGNA UN OBJETO A LA CLASE CONEXION PARA OBTENER EL PUENTE A LA BASE DE DATOS MEDIANTE UN CONSTRUCTOR
    public function __construct()
    {
        $this->dbconnection = new conexion();
        $this->db = $this->dbconnection->get_connection();
    }

    public function validate_user($usuario)
    {
        $result = $this->db->query("SELECT * FROM usuarios WHERE email = '$usuario'");
        while ($filas = $result->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    public function insert_token($id, $token)
    {
        $result = $this->db->query("INSERT INTO log_tokens(id_user,token)VALUES('$id','$token')");
        if (!$result) {
            return "FALSE";
        } else {
            return "TRUE";
        }
    }

    public function validate_token($token, $user)
    {
        $result = $this->db->query("SELECT * FROM log_tokens lt INNER JOIN usuarios u 
        ON
        u.id = lt.id_user WHERE lt.id_user='$user' AND lt.token='$token'");
        while ($filas = $result->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
}
