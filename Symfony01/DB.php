<?php
include_once 'Falta.php';
include_once 'Alumno.php';
class DB {
    private $conexion;

    public function __construct() {
        $servername = "localhost";
        $username = "user";
        $password = "pass";
        $database = "fys";

        $this->conexion = mysqli_connect($servername, $username, $password, $database);
    }
    
    
     public function loginUser($userName) {
        $sql = "SELECT * FROM usuarios WHERE (nombre='" . $userName . "')";
        $result = $this->conexion->query($sql);

        if ($result->num_rows > 0) {
            //existe al menos un alumno  

            while ($row = $result->fetch_assoc()) {
                //creamos un usuario
                $user = new User($row["id_usuario"], $row["nombre"], $row["tipo_usuario"]);
                //lo añadimos al array
                
                
            }
            return $user;
           
        } else {
            //no existe ningún alumno 
            return false;
        }
    }
    public function listaAlumnos() {
        $sql = "SELECT * FROM alumnos;";
        $result = $this->conexion->query($sql);

        // creamos el arraylist
        echo 'dento de lista alumnos';
        $listaAlumnos = array();

        if ($result->num_rows > 0) {
            //existe al menos un alumno

            while ($row = $result->fetch_assoc()) {

                //creamos un usuario

                $alumno = new Alumno($row["id_alumno"], $row["nombre"]);

                array_push($listaAlumnos, $alumno);
                //lo añadimos al array
            }
            return $listaAlumnos;
        } else {
            //no existe ningún alumno 
            return false;
        }
    }

    public function listaFaltas($rol) {
        $listaFaltas = array();
        if ($rol = 'Director') {
            $sql = "SELECT * FROM falta where gravedad = 'Grave' or gravedad = 'Muy Grave';";
            $result = $this->conexion->query($sql);
            // creamos el arraylist
            while ($row = $result->fetch_assoc()) {

                //creamos un usuario

                $falta = new Falta($row['id_falta'], $row['gravedad'], $row['descripcion']);

                array_push($listaFaltas, $falta);
            }
            return $listaFaltas;
        } else {
            $sql = "SELECT * FROM falta where gravedad = 'Leve';";
            $result = $this->conexion->query($sql);

            while ($row = $result->fetch_assoc()) {

                //creamos un usuario

                $falta = new Falta($row['id_falta'], $row['gravedad'], $row['descripcion']);

                array_push($listaFaltas, $falta);
            }
            return $listaFaltas;
        }

        return false;
    }
}
