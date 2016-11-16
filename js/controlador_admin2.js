        $(document).ready(function(){
        Cargardoctores = function(){
        $.ajax({
            url:"../ajax/procesar_admin2.php",
            method:"POST",
            success: function(respuesta){
                alert("mi");
                //$("#div-doctores").html(respuesta);
               
            },
            error:function(){

            }
        });
     
    }
});