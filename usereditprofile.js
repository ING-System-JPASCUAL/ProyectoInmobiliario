function init(){
    $("#mnt_editprofile").on("submit", function(e){
        editprofile(e);
    });
}

$(document).ready(function() {
    
    $.ajax({
        url:"controller/usuario.php?op=mostrar",
        type:"GET",
        contentType: false,
        processData: false,
        success:function(data){
            data = JSON.parse(data);
            $('#usu_nom_edit').val(data.usu_nom);
            $('#usu_ape_edit').val(data.usu_ape);
            $('#usu_email_edit').val(data.usu_email);
            $('#usu_cel_edit').val(data.usu_cel);
            $('#usu_telf_edit').val(data.usu_telf);
            $('#usu_dni_edit').val(data.usu_dni);
        }
    })
});

function editprofile(e){
    e.preventDefault();
    var formData = new FormData($('#mnt_editprofile')[0]);
    $.ajax({
        url:"controller/usuario.php?op=update",
        type:"POST",
        data: formData,
        contentType: false,
        processData: false,
        success:function(data){
            console.log(data); 

            Swal.fire({
                title: "Excelente!",
                text: "Perfil Actualizado!",
                icon: "success"
              });
        }
    })
}

init();