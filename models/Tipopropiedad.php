<?php
    class Tipopropiedad extends Conectar{

        /* TODO: Obtener todos los registros */
        public function get_tipopropiedad(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_tipopropiedad WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /* TODO:Registro x id */
        public function get_tipopropiedad_x_id($tipprod_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_tipopropiedad WHERE tipprod_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tipprod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_tipopropiedad_x_nom($tipprod_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_tipopropiedad WHERE tipprod_nom = ? AND est=1";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tipprod_nom);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
    }
?>