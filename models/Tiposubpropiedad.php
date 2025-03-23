<?php
    class Tiposubpropiedad extends Conectar{

        /* TODO: Obtener todos los registros */
        public function get_tiposubpropiedad($tipprod_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_tiposubpropiedad WHERE tipprod_id=? AND  est=1;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tipprod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
    }
?>