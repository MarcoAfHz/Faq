<?php

class Chat{
    private $db;

    public function __construct(){
        require_once('model/Conexion.php');
        $this->db = Conexion::conectar();
    }

    public function anadirMandados($usuario, $fecha, $cate, $software, $pregunta, $respuesta, $informe){
        $consulta = $this->db->prepare("INSERT INTO CHAT(USUARIO, FECHA, CATE, SOFTWARE, PREGUNTA, RESPUESTA, INFORME) VALUES(:u, :f, :c, :s, :p, :r, :i)");
        $consulta->execute(array(
            ":u" => $usuario,
            ":f" => $fecha,
            ":c" => $cate,
            ":s" => $software,
            ":p" => $pregunta,
            ":r" => $respuesta,
            ":i" => $informe
        ));
    }

    public function mostrarMandados(){
        $consulta = $this->db->prepare("SELECT * FROM CHAT");
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function cuentaMensajes(){
        $consulta = $this->db->prepare("SELECT COUNT(*) FROM CHAT");
        $consulta->execute();
        $resultado = $consulta->fetchColumn();

        return $resultado;
    }

    public function borrarMensaje($id){
        $consulta = $this->db->prepare("DELETE FROM CHAT WHERE ID=:id");
        $consulta->execute(array(
            ":id" => $id
        ));
    }

    

}


?>