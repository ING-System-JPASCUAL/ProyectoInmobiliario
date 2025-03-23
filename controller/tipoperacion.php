<?php
    /* TODO:Cadena de Conexion */
    require_once("../config/conexion.php");
    /* TODO:Modelo Tipo Operacion */
    require_once("../models/Tipoperacion.php");
    $tipoperacion = new Tipoperacion();

    /*TODO: opciones del controlador Tipopropiedad*/
    switch($_GET["op"]){

        /* TODO: Formato para llenar combo en formato HTML */
        case "combo":
            $datos = $tipoperacion->get_tipoperacion();
            $html="";
            $html.="<option value=''>Selecciona el tipo operacion</option>";
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['tipopera_id']."'>".$row['tipopera_nom']."</option>";
                }
                echo $html;
            }
            break;

    }
?>