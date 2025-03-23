<?php
    /* TODO:Cadena de Conexion */
    require_once("../config/conexion.php");
    /* TODO:Modelo Tipopropiedad */
    require_once("../models/Tipopropiedad.php");
    $tipopropiedad = new Tipopropiedad();

    /*TODO: opciones del controlador Tipopropiedad*/
    switch($_GET["op"]){
    
        /* TODO: Formato para llenar combo en formato HTML */
        case "combo":
            $datos = $tipopropiedad->get_tipopropiedad();
            $html="";
            $html.="<option value=''>Selecciona el tipo propiedad</option>";
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['tipprod_id']."'>".$row['tipprod_nom']."</option>";
                }
                echo $html;
            }
            break;

    }
?>