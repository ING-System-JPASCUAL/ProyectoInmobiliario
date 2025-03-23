function init(){
    $("#mnt_login").on("submit", function(e){
        login(e);
    });

    $("#mnt_register").on("submit", function(e){
        register(e);
    });
}

$(document).ready(function() {
    $("#msg_login").hide();
    $("#msg_register").hide();
});

function login(e){
    e.preventDefault();
    var formData = new FormData($('#mnt_login')[0]);
    $.ajax({
        url:"controller/usuario.php?op=login",
        type:"POST",
        data: formData,
        contentType: false,
        processData: false,
        success:function(datos){
            console.log(datos);
            if(datos == 0){
                $("#msg_login").show();
            }else{
                window.location.href = "index.php";
            }        
        }
    })
}

function register(e){
    e.preventDefault();
    var formData = new FormData($('#mnt_register')[0]);
    $.ajax({
        url:"controller/usuario.php?op=insert",
        type:"POST",
        data: formData,
        contentType: false,
        processData: false,
        success:function(datos){
            console.log(datos);
            if(datos == 1){
                window.location.href = "index.php";
            }else if(datos == 0){
                $("#msg_register").show();
            }
        }
    })
}

init();