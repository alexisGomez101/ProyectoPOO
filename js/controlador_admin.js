function validacion(){

    var parametros = "txt-nombre="+$("#txt-nombre").val()+"&"+
                                "txt-apellidos="+$("#txt-apellidos").val()+"&"+
                                "txt-fechaNacimiento="+$("#txt-fechaNacimiento").val()+"&"+
                                "txtEdad="+$("#txtEdad").val()+"&"+
                                "txt-id="+$("#txt-id").val()+"&"+
                                "txt-direccion="+$("#txt-direccion").val()+"&"+
                                "txt-telefono="+$("#txt-telefono").val()+"&"+
                                "slc-genero="+$("#slc-genero").val()+"&"+
                                "slc-estado="+$("#slc-estado").val()+"&"+
                                "txt-fechaIngreso="+$("#txt-fechaIngreso").val()+"&"+
                                "txt-codigo="+$("#txt-codigo").val()+"&"+
                                "txt-contraseña="+$("#txt-contraseña").val()+"&"+
                                "txt-area="+$("#txt-area").val()+"&"+
                                "txt-turnoTrabajo="+$("#txt-turnoTrabajo").val()+"&"+
                                "txt-sueldo="+$("#txt-sueldo").val();

                                //alert(parametros);
              
            $.ajax({
                url:"../../ajax/procesar_admin.php?accion=1",
                method: "POST",
                data: parametros,

                success: function(respuesta){

                    if(respuesta=="Y")
                            {
                                alert("Debe llenar todos los campos");

                                if($("#txt-nombre").val()==""){
                                    $("#txt-nombre").css("background-color","F78181");
                                }else {
                                    $("#txt-nombre").css("background-color","fff");
                                }

                                if($("#txt-apellidos").val()==""){
                                    $("#txt-apellidos").css("background-color","F78181");
                                }else {
                                    $("#txt-apellidos").css("background-color","fff");
                                }

                                if($("#txt-fechaNacimiento").val()==""){
                                    $("#txt-fechaNacimiento").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaNacimiento").css("background-color","fff");
                                }

                                if($("#txtEdad").val()==""){
                                    $("#txtEdad").css("background-color","F78181");
                                }else {
                                    $("#txtEdad").css("background-color","fff");
                                }
                                if($("#txt-id").val()==""){
                                    $("#txt-id").css("background-color","F78181");
                                }else {
                                    $("#txt-id").css("background-color","fff");
                                }

                                if($("#txt-direccion").val()==""){
                                    $("#txt-direccion").css("background-color","F78181");
                                }else {
                                    $("#txt-direccion").css("background-color","fff");
                                }

                                if($("#txt-telefono").val()==""){
                                    $("#txt-telefono").css("background-color","F78181");
                                }else {
                                    $("#txt-telefono").css("background-color","fff");
                                }
                                 if($("#slc-genero").val()==""){
                                    $("#slc-genero").css("background-color","F78181");
                                }else {
                                    $("#slc-genero").css("background-color","fff");
                                }

                                if($("#slc-estado").val()==""){
                                    $("#slc-estado").css("background-color","F78181");
                                }else {
                                    $("#slc-estado").css("background-color","fff");
                                }

                                if($("#txt-fechaIngreso").val()==""){
                                    $("#txt-fechaIngreso").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaIngreso").css("background-color","fff");
                                }


                                if($("#txt-codigo").val()==""){
                                    $("#txt-codigo").css("background-color","F78181");
                                }else {
                                    $("#txt-codigo").css("background-color","fff");
                                }

                                if($("#txt-contraseña").val()==""){
                                    $("#txt-contraseña").css("background-color","F78181");
                                }else {
                                    $("#txt-contraseña").css("background-color","fff");
                                }

                                if($("#txt-area").val()==""){
                                    $("#txt-area").css("background-color","F78181");
                                }else {
                                    $("#txt-area").css("background-color","fff");
                                }

                                if($("#txt-turnoTrabajo").val()==""){
                                    $("#txt-turnoTrabajo").css("background-color","F78181");
                                }else {
                                    $("#txt-turnoTrabajo").css("background-color","fff");
                                }

                                if($("#txt-sueldo").val()==""){
                                    $("#txt-sueldo").css("background-color","F78181");
                                }else {
                                    $("#txt-sueldo").css("background-color","fff");
                                }
                            } else   {
                                    alert("Campos llenos");
                                    
                                    $("#txt-nombre").css("background-color","fff");
                                    $("#txt-apellidos").css("background-color","fff");
                                    $("#txt-fechaNacimiento").css("background-color","fff");
                                    $("#txtEdad").css("background-color","fff");
                                    $("#txt-id").css("background-color","fff");
                                    $("#txt-direccion").css("background-color","fff");
                                    $("#txt-telefono").css("background-color","fff");
                                    $("#slc-genero").css("background-color","fff");
                                    $("#slc-estado").css("background-color","fff");
                                    $("#txt-fechaIngreso").css("background-color","fff");
                                    $("#txt-codigo").css("background-color","fff");
                                    $("#txt-contraseña").css("background-color","fff");
                                    $("#txt-area").css("background-color","fff");
                                    $("#txt-turnoTrabajo").css("background-color","fff");
                                    $("#txt-sueldo").css("background-color","fff");
                        }
                         },
                error: function(){
                    alert("Ocurrio un error");
                }
            });


}

function busqueda(){

    var parametros = "txt-busqueda="+$("#txt-busqueda").val();

            $.ajax({
                url:"../../ajax/procesar_admin.php?accion=10",
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

                validacion();    
        });

        $("#btn-guardar").click(function(){
                validacion(); 
        });

        $("#btn-eliminar").click(function(){

              $.ajax({
                url:"../../ajax/procesar_admin.php?accion=2",
                method: "POST",
               

                success: function(respuesta){
                    alert(respuesta);
                }
            });
        });

        $("#btn-buscar").click(function(){
            busqueda();
    });


        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=3",
            method:"POST",
            success: function(respuesta){
                $("#div-doctores").html(respuesta);
            },
            error:function(){

            }
        });
     
    
    CargarEnfermeros = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=4",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }

     CargarExpedientes = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=5",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });

     
    }
     CargarTratamiento = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=6",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }
     Cargarcitas = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=7",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }

    CargarSucursales = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=8",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }
    CargarMedicamentos = function(){
        $.ajax({
            url:"../../ajax/procesar_admin.php?accion=9",
            method:"POST",
            success: function(respuesta){
                
            },
            error:function(){

            }
        });
     
    }
        
       });
    
