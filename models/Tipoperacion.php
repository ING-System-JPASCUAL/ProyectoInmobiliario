<?php
    class Tipoperacion extends Conectar{

        /* TODO: Obtener todos los registros */
        public function get_tipoperacion(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_tipoperacion WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
    }
?>