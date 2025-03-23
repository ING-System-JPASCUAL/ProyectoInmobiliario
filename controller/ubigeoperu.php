<?php
    /* TODO:Cadena de Conexion */
    require_once("../config/conexion.php");
    /* TODO:Modelo Tipopropiedad */
    require_once("../models/Ubigeoperu.php");

    // Instancia de modelo Ubigeoperu
    $ubigeo = new Ubigeoperu();

    /*TODO: opciones del controlador Tipopropiedad*/
    switch($_GET["op"]){
    
        /* TODO: Formato para llenar combo en formato HTML */
        case "combo_departamento":
            $datos = $ubigeo->get_ubigeodepartamento();
            $html="";
            $html.="<option value=''>Selecciona el departamento</option>";
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['id']."'>".$row['name']."</option>";
                }
                echo $html;
            }
        break;

        case "combo_provincia":
            $department_id = $_POST["department_id"];
            $datos = $ubigeo->get_ubigeoprovincia($department_id);
            $html = "<option value=''>Seleccione Provincia</option>";
            if(is_array($datos)){
                foreach($datos as $row){
                    $html .= "<option value='".$row['id_provincia']."'>".$row['provincia']."</option>";
                }
            }
            echo $html;
        break;

        case "combo_distrito":
            $province_id = $_POST["province_id"];
            $department_id = $_POST["department_id"];
            $datos = $ubigeo->get_ubigeodistrito($_POST["province_id"], $_POST["department_id"]);
            $html="";
            $html.="<option value=''>Selecciona el distrito</option>";
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['distrito_id']."'>".$row['distrito_nombre']."</option>";
                }
                echo $html;
            }
        break;

    }
?>