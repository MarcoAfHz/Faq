<?php

    class Subcategoria{

        private $db;
        
        public function __construct(){
            require_once("model/Conexion.php");
            $this->db=Conexion::conectar();
        }
        
        public function mostrarSubCategoria(){
            $consulta = $this->db->prepare("SELECT * FROM SUBCATEGORIAS");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function mostrarLaSubCategoria($x){
        
            $consulta = $this->db->prepare("SELECT * FROM SUBCATEGORIAS WHERE CATE = :c");
            $consulta->execute(array(
                ":c"=>$x
            ));

            $r = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $r;
        }

        public function anadirSubCtrg($c, $s){
            $consulta = $this->db->prepare("INSERT INTO SUBCATEGORIAS(CATE, SUB_SOFT) VALUES(:c, :s)");
            $consulta->execute(array(
                ":c" => $c,
                ":s" => $s
            ));
        }

        public function mostrarNorepetidasSubs(){
            $consulta = $this->db->prepare("SELECT SUB_SOFT FROM SUBCATEGORIAS GROUP BY SUB_SOFT HAVING COUNT(*)>0");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function ordenarSub(){
            $consulta = $this->db->prepare("SELECT CATE, SUB_SOFT FROM SUBCATEGORIAS ORDER BY CATE ASC");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function modificarLaCateDeSubCategoria($nombreOriginal, $nombreNuevo){
            $consulta = $this->db->prepare("UPDATE SUBCATEGORIAS SET CATE =:nn WHERE CATE = :norg");
            $consulta->execute(array(
                ":norg" => $nombreOriginal,
                ":nn" => $nombreNuevo
            ));
        }

        public function modificarSubCategoria($id, $cate, $subCate){
            $consulta = $this->db->prepare("UPDATE SUBCATEGORIAS SET CATE = :ca, SUB_SOFT = :sf WHERE ID = :id");
            $consulta->execute(array(
                ":ca" => $cate,
                ":id" => $id,
                ":sf" => $subCate
            ));
        }

        

        public function eliminarSubCategoriaConCategoria($categoria){
            $consulta = $this->db->prepare("DELETE FROM SUBCATEGORIAS WHERE CATE = :cate");
            $consulta->execute(array(
                ":cate" => $categoria
            ));
        }

        public function eliminarSubCate($id){
            $consulta = $this->db->prepare("DELETE FROM SUBCATEGORIAS WHERE ID = :id");
            $consulta->execute(array(
                ":id" => $id
            ));
        }

        

        

    }

?>