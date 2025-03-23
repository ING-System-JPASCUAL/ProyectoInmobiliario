function init(){
    $("#inmueble_form").on("submit", function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function(){
/* TODO: Llenar Combo Tipo de SubPropiedad */
    $.post("../../controller/tiposubpropiedad.php?op=combo",function(data, status){
        $('#tipsubprop_id').html(data);
    });
});