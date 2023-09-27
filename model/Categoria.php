<?php

    class Categoria{
        private $db;
        public function __construct(){
            require_once("model/Conexion.php");
            $this->db = Conexion::conectar();
        }

        public function mostrarCategoria(){
            $consulta = $this->db->prepare("SELECT * FROM CATEGORIAS");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            
            return $resultado;
        }

        public function anadirCategoria($categoria){
            $consulta = $this->db->prepare("INSERT INTO CATEGORIAS(NOMBRE_SOFT) VALUES(:pr)");
            $consulta->execute(array(
                ":pr" => $categoria
            ));
        }

        public function modificarCategoría($id, $nombreSoft){
            $consulta = $this->db->prepare("UPDATE CATEGORIAS SET NOMBRE_SOFT=:ns WHERE ID = :id");
            $consulta->execute(array(
                ":ns" => $nombreSoft,
                ":id" => $id
            ));
        }
        
        public function eliminarCate($id){
            $consulta = $this->db->prepare("DELETE FROM CATEGORIAS WHERE ID = :id");
            $consulta->execute(array(
                ":id" => $id
            ));
        
        }

        

        

    }


?>