
function Validacion(){

    
                var parametros = "txt-nombre= "+$("#txt-nombre").val()+"&"+
                                "txt-cantidad="+$("#txt-cantidad").val()+"&"+
                                "txt-precio="+$("#txt-precio").val()+"&"+
                                "txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+
                                "txt-fechaVencimiento="+$("#txt-fechaVencimiento").val()+"&"+
                                "txt-sucursal="+$("#txt-sucursal").val();
       

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
                                if($("#txt-precio").val()==""){
                                    $("#txt-precio").css("background-color","F78181");
                                }else {
                                    $("#txt-precio").css("background-color","fff");
                                }


                        }else {
                            alert("Campos llenos");
                            $("#txt-nombre").css("background-color","fff");
                            $("#txt-cantidad").css("background-color","fff");
                            $("#txt-precio").css("background-color","fff");
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

//===================================================================================================================

 function Validacion2(){

    
                var parametros = "txt-nombre= "+$("#txt-nombre").val()+"&"+
                                "txt-cantidad="+$("#txt-cantidad").val()+"&"+
                                "txt-precio="+$("#txt-precio").val()+"&"+
                                "txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+
                                "txt-fechaVencimiento="+$("#txt-fechaVencimiento").val()+"&"+
                                "txt-sucursal="+$("#txt-sucursal").val();
                          


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
                                if($("#txt-precio").val()==""){
                                    $("#txt-precio").css("background-color","F78181");
                                }else {
                                    $("#txt-precio").css("background-color","fff");
                                }


                        }else {
                            alert("Campos llenos");
                            $("#txt-nombre").css("background-color","fff");
                            $("#txt-cantidad").css("background-color","fff");
                            $("#txt-precio").css("background-color","fff");
                            $("#txt-fechaElaboracion").css("background-color","fff");
                            $("#txt-fechaVencimiento").css("background-color","fff");
                            Actualizar();
                            }
                 },
                    error:function(){
                        alert("Ocurrio un error.");
                    }
                }); 
            
}

//================================================================================================================



function busqueda(codigoMedicamento){

            $.ajax({
                url:"../../ajax/procesar_farmacia.php?accion=7",
                data:"Codigo_Medicamento="+codigoMedicamento,
                method: "POST",
                dataType: 'json',
                success: function(respuesta){
                    if(respuesta == null){
                        alert("Medicamento no registrado");
                    }
                        $("#txt-nombre").val(respuesta.nombre);
                        $("#txt-cantidad").val(respuesta.Cantidad);
                        $("#txt-precio").val(respuesta.precio);
                        $("#txt-fechaElaboracion").val(respuesta.fecha_Elaboracion);
                        $("#txt-fechaVencimiento").val(respuesta.fecha_Vencimiento);

                },
                error: function(){
                    alert("Introduzca codigo de medicamento a buscar");
                }
        });

}

    function EliminarMedicamento(){
        var parametro = "txt-codigo="+$("#txt-busqueda").val();
        $.ajax({
            url:"../../ajax/procesar_farmacia.php?accion=2",
            method:"POST",
            data: parametro,
            success: function(respuesta){
                alert(respuesta);
                
            },
            error:function(){
                alert("ocurrio un error");
            }
        });
     
    }  




 $(document).ready(function(){
             $("#btn-actualizar").click(function(){
                Validacion2();
             });



             $("#btn-guardar").click(function(){
              Validacion();

       
             });


             $("#btn-eliminar").click(function(){
                EliminarMedicamento();                
             });

             $("#btn-buscar").click(function(){
                var codigo = $("#txt-busqueda").val();
                busqueda(codigo);
    });

            
            $("#btn-cancelar").click(function(){
                            $("#txt-nombre").val('');
                            $("#txt-cantidad").val('');
                            $("#txt-precio").val('');
                            $("#txt-fechaElaboracion").val('');
                            $("#txt-fechaVencimiento").val('');
                            $("#txt-busqueda").val('');
                
             });

            $("#btn-crearPDF").click(function(){
          
            });


        CargarSucursales = function(){
        $.ajax({
            url:"../../ajax/procesar_farmacia.php?accion=5",
            method:"POST",
            success: function(respuesta){
            $("#div-sucursales").html(respuesta);
                
            },
            error:function(){

            }
        });
    }

    CargarSucursales();

    CargarMedicamentos = function(){
        $.ajax({
            url:"../../ajax/procesar_farmacia.php?accion=6",
            method:"POST",
            success: function(respuesta){
                $("#div-medicamentos").html(respuesta);
                
            },
            error:function(){

            }
        });
     
    }

    CargarMedicamentos();

    CargarPagoMedicamentos = function(){
        $.ajax({
            url:"../../ajax/procesar_farmacia.php?accion=3",
            method:"POST",
            success: function(respuesta){
                $("#div-Pagomedicamentos").html(respuesta);
                
            },
            error:function(){

            }
        });     
    }

    CargarPagoMedicamentos();

    CargarRecetas = function(){
        $.ajax({
            url:"../../ajax/procesar_farmacia.php?accion=4",
            method:"POST",
            success: function(respuesta){
                $("#div-recetas").html(respuesta);
                
            },
            error:function(){

            }
        });
     
    }
        CargarRecetas();




    Registrar = function (){
                     var parametros ="txt-nombre= "+$("#txt-nombre").val()+"&"+
            "txt-cantidad="+$("#txt-cantidad").val()+"&"+
            "txt-sucursal="+$("#txt-sucursal").val()+"&"+
            "txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+
            "txt-fechaVencimiento="+$("#txt-fechaVencimiento").val()
            +"&"+"txt-precio="+$("#txt-precio").val();

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

    Actualizar = function(){
            var parametros ="txt-nombre= "+$("#txt-nombre").val()+"&"+
            "txt-cantidad="+$("#txt-cantidad").val()+"&"+
            "txt-sucursal="+$("#txt-sucursal").val()+"&"+
            "txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+
            "txt-fechaVencimiento="+$("#txt-fechaVencimiento").val()
            +"&"+"txt-precio="+$("#txt-precio").val()+"&"+
            "txt-codigo="+$("#txt-busqueda").val();

                $.ajax({
                    url:"../../ajax/procesar_farmacia.php?accion=9",
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





