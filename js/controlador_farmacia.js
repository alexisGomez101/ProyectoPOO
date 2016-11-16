
function Validacion(){

    
                var parametros = "txt-nombre= "+$("#txt-nombre").val()+"&"+
                                "txt-cantidad="+$("#txt-cantidad").val()+"&"+
                                "txt-descripcion="+$("#txt-descripcion").val()+"&"+
                                "txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+
                                "txt-fechaVencimiento="+$("#txt-fechaVencimiento").val(); 


                $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=1",
                    method:"POST",
                    data: parametros,
                    success:function(respuesta){
                        
                        if(respuesta=="Y")
                            {
                                alert("Debe llenar todos los campos");

                                if($("#txt-nombre").val()==""){
                                    $("#txt-nombre").css("background-color","F78181");
                                }else {
                                    $("#txt-nombre").css("background-color","fff");
                                }

                                if($("#txt-cantidad").val()==""){
                                    $("#txt-cantidad").css("background-color","F78181");
                                }else {
                                    $("#txt-cantidad").css("background-color","fff");
                                }
                                if($("#txt-descripcion").val()==""){
                                    $("#txt-descripcion").css("background-color","F78181");
                                }else {
                                    $("#txt-descripcion").css("background-color","fff");
                                }
                                if($("#txt-fechaElaboracion").val()==""){
                                    $("#txt-fechaElaboracion").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaElaboracion").css("background-color","fff");
                                }
                                if($("#txt-fechaVencimiento").val()==""){
                                    $("#txt-fechaVencimiento").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaVencimiento").css("background-color","fff");
                                }


                        }else {
                            alert("Campos llenos");
                            $("#txt-nombre").css("background-color","fff");
                            $("#txt-cantidad").css("background-color","fff");
                            $("#txt-descripcion").css("background-color","fff");
                            $("#txt-fechaElaboracion").css("background-color","fff");
                            $("#txt-fechaVencimiento").css("background-color","fff");
                            Registrar();
                            }
                 },
                    error:function(){
                        alert("Ocurrio un error.");
                    }
                }); 
            
}



function busqueda(){

    var parametros = "txt-busqueda="+$("#txt-busqueda").val();

            $.ajax({
                url:"../../ajax/procesar_farmacia.php?accion=7",
                method: "POST",
                data: parametros,
                success: function(respuesta){
                    alert(respuesta);
                },
                error: function(){
                    alert("Ocurrio un error");
                }
        });

}






 $(document).ready(function(){
             $("#btn-actualizar").click(function(){
                Validacion();
             });



             $("#btn-guardar").click(function(){
              Validacion();

       
             });


             $("#btn-eliminar").click(function(){
                 $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=2",
                    method:"POST",
                    success:function(respuesta){
                        alert(respuesta);
                    },
                     error:function(){
                        alert("Ocurrio un error.");
                    }
                });
                
             });
             $("#btn-pagar").click(function(){
                 $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=3",
                    method:"POST",
                    success:function(respuesta){
                        alert(respuesta);
                    },
                     error:function(){
                        alert("Ocurrio un error.");
                    }
                });
                
             });
             $("#btn-buscar").click(function(){
            busqueda();
    });

            
            $("#btn-ir").click(function(){
                 $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=4",
                    method:"POST",
                    success:function(respuesta){
                        alert(respuesta);
                    },
                     error:function(){
                        alert("Ocurrio un error.");
                    }
                });
                
             });
        CargarSucursales = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=5",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }
    CargarMedicamentos = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=6",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }

    Registrar = function (){
                     var parametros ="txt-nombre= "+$("#txt-nombre").val()+"&"+
            "txt-cantidad="+$("#txt-cantidad").val()+"&"+
            "txt-descripcion="+$("#txt-descripcion").val()+"&"+
            "txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+
            "txt-fechaVencimiento="+$("#txt-fechaVencimiento").val(); 

                $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=8",
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


        });


