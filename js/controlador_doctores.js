function ValidarReceta(){
		var parametros = "txt-fecha="+$("#txt-fecha").val()+"&"+
                                "txt-nombre="+$("#txt-nombre").val()+"&"+
                                "txt-noExpediente="+$("#txt-nombre").val()+"&"+
                                "txt-edad="+$("#txt-edad").val()+"&"+
                                "txt-peso="+$("#txt-peso").val()+"&"+
                                "txt-descripcion="+$("#txt-descripcion").val(); 

                $.ajax({
                    url:"../../ajax/procesar_doctores.php?accion=1",
                    method:"POST",
                    data: parametros,
                    success:function(respuesta){

                        if(respuesta=="Y")
                            {
                                alert("Debe llenar todos los campos");

                                if($("#txt-fecha").val()==""){
                                    $("#txt-fecha").css("background-color","F78181");
                                }else {
                                    $("#txt-fecha").css("background-color","fff");
                                }
                                if($("#txt-nombre").val()==""){
                                    $("#txt-nombre").css("background-color","F78181");
                                }else {
                                    $("#txt-nombre").css("background-color","fff");
                                }
                                if($("#txt-peso").val()==""){
                                    $("#txt-peso").css("background-color","F78181");
                                }else {
                                    $("#txt-peso").css("background-color","fff");
                                }
                                if($("#txt-edad").val()==""){
                                    $("#txt-edad").css("background-color","F78181");
                                }else{
                                    $("#txt-edad").css("background-color","fff");
                                }
                                if($("#txt-noExpediente").val()==""){
                                    $("#txt-noExpediente").css("background-color","F78181");
                                }else{
                                    $("#txt-noExpediente").css("background-color","fff");

                                }
                                if($("#txt-descripcion").val()==""){
                                    $("#txt-descripcion").css("background-color","F78181");
                                }else{
                                    $("#txt-descripcion").css("background-color","fff");
                                }

                        }else {
                            alert("Campos llenos");
                            $("#txt-fecha").css("background-color","fff");
                            $("#txt-nombre").css("background-color","fff");
                            $("#txt-noExpediente").css("background-color","fff"); 
                            $("#txt-peso").css("background-color","fff");
                            $("#txt-edad").css("background-color","fff");
                            $("#txt-descripcion").css("background-color","fff");
                            }
                     },
                    error:function(){
                        alert("Ocurrio un error.");
                    }
                }); 
}




function ValidarExpediente(){
    var parametros = 
                        "txt-peso="+$("#txt-peso").val()+"&"+
                        "txt-altura="+$("#txt-altura").val()+"&"+
                        "txt-temperatura="+$("#txt-temperatura").val()+"&"+
                        "txt-sintomas="+$("#txt-sintomas").val()+"&"+
                        "txt-fecha-cita="+$("#txt-fecha-cita").val()+"&"+
                        "txt-hora-cita="+$("#txt-hora-cita").val();    
                    $.ajax({
                        url:"../../ajax/procesar_doctores.php?accion=3",
                        method:"POST",
                        data: parametros,
                        success:function(respuesta){
                           // alert(respuesta);
                            if(respuesta=="Y")
                                {
                                    alert("Debe llenar todos los campos");


                                    if($("#txt-peso").val()==""){
                                        $("#txt-peso").css("background-color","F78181");
                                    }else {
                                        $("#txt-peso").css("background-color","fff");
                                    }
                                    if($("#txt-altura").val()==""){
                                        $("#txt-altura").css("background-color","F78181");
                                    }
                                    else{
                                        $("#txt-altura").css("background-color","fff");
                                    }
                                    if($("#txt-temperatura").val()==""){
                                        $("#txt-temperatura").css("background-color","F78181");
                                    }else {
                                        $("#txt-temperatura").css("background-color","fff");
                                    }if($("#txt-sintomas").val()==""){
                                        $("#txt-sintomas").css("background-color","F78181");
                                    }else {
                                        $("#txt-sintomas").css("background-color","fff");
                                    }if($("#txt-fecha-cita").val()==""){
                                        $("#txt-fecha-cita").css("background-color","F78181");
                                    }else {
                                        $("#txt-fecha-cita").css("background-color","fff");
                                    }if($("#txt-hora-cita").val()==""){
                                        $("#txt-hora-cita").css("background-color","F78181");
                                    }else {
                                        $("#txt-hora-cita").css("background-color","fff");
                                    }
                                    
                            }else {
                                alert("Campos llenos");
                                $("#txt-peso").css("background-color","fff");
                                $("#txt-altura").css("background-color","fff");
                                $("#txt-temperatura").css("background-color","fff");
                                $("#txt-fecha-cita").css("background-color","fff");
                                $("#txt-hora-cita").css("background-color","fff");
                                Registrar();
                         }
                     },
                        error:function(){
                            alert("Ocurrio un error.");
                        }
                    }); 
               
}

 Registrar = function (){
                     var parametros ="txt-peso= "+$("#txt-peso").val()+"&"+
            "txt-altura="+$("#txt-altura").val()+"&"+
            "txt-temperatura="+$("#txt-temperatura").val()+"&"+
            "txt-sintomas="+$("#txt-fechaElaboracion").val()+"&"+
            "txt-fecha-cita="+$("#txt-fecha-cita").val()
            +"&"+"txt-hora-cita="+$("#txt-hora-cita").val();

                $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=1",
                    method:"POST",
                    data: parametros,
                    success:function(respuesta){
                        alert(respuesta);
                    },
                     error:function(){
                        alert("Ocurrio un error.");
                    }
                });
    }

$(document).ready(function(){
        $("#btn-guardar").click(function(){
                ValidarReceta();
            });
        $("#btn-buscar").click(function(){
           var parametros = "txt-codigo="+$("#txt-codigo").val();

            $.ajax({
                url:"../../ajax/procesar_doctores.php?accion=2",
                method: "POST",
                data: parametros,
                success: function(respuesta){
                    $("#div-mostrar").html(respuesta);
                },
                error: function(){
                    alert("Ocurrio un error");
                }
        });
    });
         $("#btn-guardarExpendiente").click(function(){
                ValidarExpediente();
         });

});