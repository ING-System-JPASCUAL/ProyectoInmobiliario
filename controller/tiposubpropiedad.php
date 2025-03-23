<?php
    /* TODO:Cadena de Conexion */
    require_once("../config/conexion.php");
    /* TODO:Modelo TipoSubpropiedad */
    require_once("../models/Tiposubpropiedad.php");
    $tiposubpropiedad = new Tiposubpropiedad();

    /*TODO: opciones del controlador Tipopropiedad*/
    switch($_GET["op"]){

        /* TODO: Formato para llenar combo en formato HTML */
        case "combo":
            $datos = $tiposubpropiedad->get_tiposubpropiedad($_POST["tipprod_id"]);
            $html="";
            $html.="<option value=''>Selecciona el tipo subpropiedad</option>";
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['tipsubprop_id']."'>".$row['tipsubprop_nom']."</option>";
                }
                echo $html;
            }
            break;

    }
?>