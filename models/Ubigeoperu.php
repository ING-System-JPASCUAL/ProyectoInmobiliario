<?php
    class Ubigeoperu extends Conectar{

        /* TODO: Obtener todos los registros */
        public function get_ubigeodepartamento(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ubigeo_peru_departments";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /* TODO: Obtener provincias por departamento */
        public function get_ubigeoprovincia($department_id) {
            $conectar = parent::conexion();
            parent::set_names();
            
            // Consulta corregida: Agregado WHERE para filtrar por department_id
            $sql = "SELECT 
                        p.id AS id_provincia,
                        p.name AS provincia,
                        p.department_id,
                        d.name AS departamento
                    FROM 
                        ubigeo_peru_provinces p
                    INNER JOIN 
                        ubigeo_peru_departments d ON p.department_id = d.id
                    WHERE 
                        p.department_id = ?
                    ORDER BY 
                        p.name ASC";
                        
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $department_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
      }


        /* TODO: Obtener todos los registros */
        public function get_ubigeodistrito($province_id, $department_id) {
            $conectar = parent::conexion();
            parent::set_names();
            
            $sql = "SELECT 
                        dis.id AS distrito_id,
                        dis.name AS distrito_nombre,
                        pro.id AS provincia_id,
                        pro.name AS provincia_nombre,
                        dep.id AS departamento_id,
                        dep.name AS departamento_nombre
                    FROM 
                        ubigeo_peru_districts dis
                    INNER JOIN 
                        ubigeo_peru_provinces pro ON dis.province_id = pro.id
                    INNER JOIN 
                        ubigeo_peru_departments dep ON dis.department_id = dep.id
                    WHERE 
                        dis.province_id = ? 
                        AND dis.department_id = ?
                    ORDER BY 
                        dis.name ASC";
                        
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $province_id);
            $sql->bindValue(2, $department_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        
    }
?>