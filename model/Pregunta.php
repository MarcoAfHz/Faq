<?php

    class Pregunta{
        private $db;
        public function __construct(){
            require_once("model/Conexion.php");
            $this->db = Conexion::conectar();
        }

        public function mostrarPregunta(){
            $consulta = $this->db->prepare("SELECT * FROM PREGUNTAS");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function mostrarLaPregunta($subcategoria){
            $consulta = $this->db->prepare("SELECT * FROM PREGUNTAS WHERE SOFT = :s");
            $consulta->execute(array(
                ":s" =>$subcategoria
            ));

            $pe = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $pe;
        }

        public function anadirPregunta($cate, $soft, $fecha, $pregunta, $imagen1, $imagen2, $respuesta){
            $consulta = $this->db->prepare("INSERT INTO PREGUNTAS(CATE, SOFT, FECHA, PREGUNTA, IMAGEN1, IMAGEN2, RESPUESTA) VALUES(:c, :s, :f, :p, :ima1, :ima2, :r)");
            $consulta->execute(array(
                ":c" => $cate,
                ":s" =>$soft,
                ":f" =>$fecha,
                ":p" =>$pregunta,
                ":ima1" => $imagen1,
                ":ima2" => $imagen2,
                ":r" =>$respuesta
            ));
        }

        public function modificarLaSubDePregunta($nombreOriginal, $nombreNuevo){
            $consulta = $this->db->prepare("UPDATE PREGUNTAS SET SOFT =:nn WHERE SOFT = :norg");
            $consulta->execute(array(
                ":norg" => $nombreOriginal,
                ":nn" => $nombreNuevo
            ));
        }

        public function mostrarNoRepetidos(){
            $consulta = $this->db->prepare("SELECT SOFT FROM PREGUNTAS GROUP BY SOFT HAVING COUNT(*)>0");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function modificarPre($id, $soft, $pregunta, $respuesta, $imagen1, $imagen2){
            $consulta = $this->db->prepare("UPDATE PREGUNTAS SET SOFT = :sft, PREGUNTA = :prg, RESPUESTA = :respt, IMAGEN1 = :imguno, IMAGEN2 = :imgdos WHERE ID = :id");
            $consulta->execute(array(
                ":sft" => $soft,
                ":id" => $id,
                ":prg" => $pregunta,
                ":respt" => $respuesta,
                ":imguno" => $imagen1,
                ":imgdos" => $imagen2
            ));
        }

        public function modificarLaCatedePregunta($nombreOriginal, $nombreNuevo){
            $consulta = $this->db->prepare("UPDATE PREGUNTAS SET CATE = :nn WHERE CATE = :norg");
            $consulta->execute(array(
                ":nn" => $nombreNuevo,
                ":norg" => $nombreOriginal
            ));
        }

        public function eliminarPreguntaTotal($cate){
            $consulta = $this->db->prepare("DELETE FROM PREGUNTAS WHERE CATE = :c");
            $consulta->execute(array(
                ":c" => $cate
            ));
        }

        public function eliminarPreguntaSubTotal($cate){
            $consulta = $this->db->prepare("DELETE FROM PREGUNTAS WHERE SOFT = :c");
            $consulta->execute(array(
                ":c" => $cate
            ));
        }
        
        public function eliminarPregunta($id){
            $consulta = $this->db->prepare("DELETE FROM PREGUNTAS WHERE ID = :id");
            $consulta->execute(array(
                ":id" => $id
            ));
        }

    }

?>