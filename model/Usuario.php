<?php

    class Usuario{
        private $db;

        public function __construct(){
            require_once("model/Conexion.php");
            $this->db=Conexion::conectar();
        }

        public function mostrarUsuario(){
            $consulta = $this->db->prepare("SELECT * FROM USUARIO");
            $consulta->execute();

            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function anadirUsuario($nombre, $nombreUsuario, $contrasena, $rol){
            $pass_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
            $consulta = $this->db->prepare("INSERT INTO USUARIO(NOMBRE, NOMBRE_USUARIO, CENCRYPT, ROL) VALUES(:n, :nu, :ce, :r)");
            $consulta->execute(array(
                ":n" => $nombre,
                ":nu" => $nombreUsuario,
                ":r" => $rol,
                ":ce" => $pass_encriptada
            )); 
        }

        public function mostrarNoRepetidosRoles(){
            $consulta = $this->db->prepare("SELECT ROL FROM USUARIO GROUP BY ROL HAVING COUNT(*)>0;");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function modificarUsuario($id, $nombrereal, $nombreusuario, $contrasena, $rol, $ency){
            $consulta = $this->db->prepare("UPDATE USUARIO SET NOMBRE = :nr, NOMBRE_USUARIO = :nu, ROL = :rol, CENCRYPT = :ency WHERE ID = :id");
            $consulta->execute(array(
                ":nr" => $nombrereal,
                ":nu" => $nombreusuario,
                ":id" => $id,
                ":rol" => $rol,
                ":ency" => $ency
            ));
        }

        public function encrypt($id){
            $consulta = $this->db->prepare("SELECT CENCRYPT FROM USUARIO WHERE ID=:id");
            $consulta->execute(array(
                ":id" => $id
            ));
        }

        public function eliminarUsuario($id){
            $consulta = $this->db->prepare("DELETE FROM USUARIO WHERE ID = :id");
            $consulta->execute(array(
                ":id" => $id
            ));
        }

        public function logear($usuario, $contrasena){
            $consulta = $this->db->prepare("SELECT * FROM USUARIO WHERE NOMBRE_USUARIO = :u");
            $consulta->execute(array(
                ":u" => $usuario
            ));

            $contrasenaBD = $consulta->fetch(PDO::FETCH_ASSOC)["CENCRYPT"];

            $resultado = false;
            if(($consulta->rowCount() > 0) && (password_verify($contrasena, $contrasenaBD))){
                $resultado = true;
            }

            return $resultado;

        }
        
        public function getrol($usuario){
            $consulta = $this->db->prepare("SELECT * FROM USUARIO WHERE NOMBRE_USUARIO = :u");
            $consulta->execute(array(
                ":u" => $usuario
            ));

            return $consulta->fetch(PDO::FETCH_ASSOC)["ROL"];
        }

        public function getnombrereal($usuario){
            $consulta = $this->db->prepare("SELECT * FROM USUARIO WHERE NOMBRE_USUARIO = :u");
            $consulta->execute(array(
                ":u" => $usuario
            ));
            
            return $consulta->fetch(PDO::FETCH_ASSOC)["NOMBRE"];
        }

        



        
    }

?>