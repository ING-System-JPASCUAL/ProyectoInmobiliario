<?php
    require_once ("../config/conexion.php");
    require_once ("../models/Usuario.php");

    $usuario = new Usuario();

    switch ($_GET["op"]) {

        case "login":
            $datos = $usuario->login($_POST["usu_email"], $_POST["usu_pass"]);
            if (is_array($datos) && count($datos) > 0) {
                $_SESSION["usu_id"] = $datos[0]["usu_id"];
                $_SESSION["usu_dni"] = $datos[0]["usu_dni"];
                $_SESSION["usu_nom"] = $datos[0]["usu_nom"];
                $_SESSION["usu_email"] = $datos[0]["usu_email"];
                $_SESSION["usu_img"] = $datos[0]["usu_img"];

                echo "1";
            } else {
                echo "0";
            }
            break;

        case "insert":
            $datos = $usuario->get_email_usuario($_POST["usu_email_register"]);
            if (is_array($datos) && count($datos) > 0) {
                echo "0";
            } else {
                $datos1 = $usuario->insert_usuario($_POST["usu_dni_register"], $_POST["usu_nom_register"], $_POST["usu_ape_register"], $_POST["usu_email_register"], $_POST["usu_pass_register"]);
                if (is_array($datos1) && count($datos1) > 0) {
                    $datos2 = $usuario->get_id_usuario($datos1[0]["usu_id"]);
                    $_SESSION["usu_id"] = $datos2[0]["usu_id"];
                    $_SESSION["usu_dni"] = $datos2[0]["usu_dni"];
                    $_SESSION["usu_nom"] = $datos2[0]["usu_nom"];
                    $_SESSION["usu_email"] = $datos2[0]["usu_email"];
                    $_SESSION["usu_img"] = $datos2[0]["usu_img"];
                }
                echo "1";
                break;
            }
        
        case "mostrar":
            $datos = $usuario->get_id_usuario($_SESSION["usu_id"]);
            if (is_array($datos) && count($datos) > 0) {
                foreach($datos as $row){
                    $output["usu_id"] = $row["usu_id"];
                    $output["usu_dni"] = $row["usu_dni"];
                    $output["usu_nom"] = $row["usu_nom"];
                    $output["usu_ape"] = $row["usu_ape"];
                    $output["usu_email"] = $row["usu_email"];
                    $output["usu_img"] = $row["usu_img"];
                    $output["usu_telf"] = $row["usu_telf"];
                    $output["usu_cel"] = $row["usu_cel"];
                }
                echo json_encode($output);
            }else{
                echo "0";
            }
            break;

        case "update":
            $usuario->update_usuario(
                $_SESSION["usu_id"],
                $_POST["usu_nom_edit"],
                $_POST["usu_ape_edit"],
                $_POST["usu_telf_edit"],
                $_POST["usu_cel_edit"]   
            );
            echo "1";
            break;

    }
?>