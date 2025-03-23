<?php
    class Usuario extends Conectar{

        public function login ($usu_email,$usu_pass) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql=" 
                SELECT * FROM tm_usuario
                WHERE
                usu_email = ?
                AND usu_pass = ?
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_email);
            $sql->bindValue(2,$usu_pass);
            $sql->execute();
            return $sql->fetchAll();
        }

        public function insert_usuario($usu_dni,$usu_nom,$usu_ape,$usu_email,$usu_pass){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="
                INSERT INTO tm_usuario (usu_dni,usu_nom,usu_ape, usu_email, usu_pass)
                VALUES(?,?,?,?,?)
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_dni);
            $sql->bindValue(2, $usu_nom);
            $sql->bindValue(3, $usu_ape);
            $sql->bindValue(4, $usu_email);
            $sql->bindValue(5, $usu_pass);
            $sql->execute();

            $sql1 = "select last_insert_id() as 'usu_id'";
            $sql1 = $conectar->prepare($sql1);
            $sql1->execute();

            return $sql1->fetchAll(pdo::FETCH_ASSOC);
        }

        // PARA VERIFICAR SI EL CORREO EXISTE O NO
        public function get_email_usuario($usu_email){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="
                SELECT * FROM tm_usuario
                WHERE usu_email = ?
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_email);
            $sql->execute();
            return $sql->fetchAll();
        }

        public function get_id_usuario($usu_id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="
                SELECT * FROM tm_usuario
                WHERE usu_id = ?
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $sql->fetchAll();
        }

        public function update_usuario($usu_id,$usu_nom,$usu_ape,$usu_cel,$usu_telf){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="
                UPDATE tm_usuario
                SET
                    usu_nom = ?,
                    usu_ape = ?,
                    usu_cel = ?,
                    usu_telf = ?,
                    fech_modi = NOW()
                WHERE
                    usu_id = ?
                ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_nom);
            $sql->bindValue(2, $usu_ape);
            $sql->bindValue(3, $usu_cel);
            $sql->bindValue(4, $usu_telf);
            $sql->bindValue(5, $usu_id);
            $sql->execute();
            return $sql->fetchAll();
        }
    }    
?>