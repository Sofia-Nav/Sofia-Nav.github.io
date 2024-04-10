<?php
include 'db_con.php';

class register
{
    private $db;
    private $dbconnection;
    private $lista;

    public function __construct()
    {
        $this->dbconnection = new conexion();
        $this->db = $this->dbconnection->get_connection();
    }
    public function validate_user($correo)
    {
        $result = $this->db->query("SELECT * FROM usuarios WHERE email ='$correo'");
        while ($filas = $result->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
 public function insert_user($nombre,$contra,$tipo,$correo)
    {
        $result = $this->db->query("INSERT INTO usuarios (user,email,password,rol)VALUES('$nombre','$correo','$contra','$tipo')");
        if (!$result) {
            return "FALSE";
        } else {
            return "TRUE";
        }
    }

}
