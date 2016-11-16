 function validacion(){
    var parametros =    "txt-fechaVisita="+$("#txt-fechaVisita").val()+"&"+
                                "txt-nombre="+$("#txt-nombre").val()+"&"+
                                "txt-apellidos="+$("#txt-apellidos").val()+"&"+
                                "txt-fechaNacimiento="+$("#txt-fechaNacimiento").val()+"&"+
                                "txtEdad="+$("#txtEdad").val()+"&"+
                                "txt-id="+$("#txt-id").val()+"&"+
                                "txt-direccion="+$("#txt-direccion").val()+"&"+
                                "txt-telefono="+$("#txt-telefono").val()+"&"+
                                "slc-genero="+$("#slc-genero").val()+"&"+
                                "slc-estado="+$("#slc-estado").val()+"&"+
                                "txt-Observaciones="+$("#txt-Observaciones").val();

                               
                                //alert(parametros);
              
            $.ajax({
                url:"../../ajax/procesar_enfermeros.php?accion=1",
                method: "POST",
                data: parametros,
                success: function(respuesta){

                if(respuesta== "Y")
                            {
                                alert("Debe llenar todos los campos");

                                if($("#txt-fechaVisita").val()==""){
                                    $("#txt-fechaVisita").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaVisita").css("background-color","fff");
                                }

                                if($("#txt-Observaciones").val()==""){
                                    $("#txt-Observaciones").css("background-color","F78181");
                                }else {
                                    $("#txt-Observaciones").css("background-color","fff");
                                }

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

                                

                            } else   {
                                    alert("Campos llenos");
                                    $("#txt-fechaVisita").css("background-color","fff");
                                    $("#txt-nombre").css("background-color","fff");
                                    $("#txt-apellidos").css("background-color","fff");
                                    $("#txt-fechaNacimiento").css("background-color","fff");
                                    $("#txtEdad").css("background-color","fff");
                                    $("#txt-id").css("background-color","fff");
                                    $("#txt-direccion").css("background-color","fff");
                                    $("#txt-telefono").css("background-color","fff");
                                    $("#slc-genero").css("background-color","fff");
                                    $("#slc-estado").css("background-color","fff");
                                    $("#txt-Observaciones").css("background-color","fff");
                                   
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
                url:"../../ajax/procesar_enfermeros.php?accion=2",
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

 function validacionPreClinica(){

            
                var parametros = "txt-numero="+$("#txt-numero").val()+"&"+
                                "txt-peso="+$("#txt-peso").val()+"&"+
                                "txt-altura="+$("#txt-altura").val()+"&"+
                                "txt-temperatura="+$("#txt-temperatura").val()+"&"+
                                "txt-presion="+$("#txt-presion").val(); 
                               // alert(parametros);


                $.ajax({
                    url:"../../ajax/procesar_enfermeros.php?accion=3",
                    method:"POST",
                    data: parametros,
                    success:function(respuesta){
                        
                        if(respuesta=="Y")
                            {
                                alert("Debe llenar todos los campos");

                                if($("#txt-numero").val()==""){
                                    $("#txt-numero").css("background-color","F78181");
                                }else {
                                    $("#txt-numero").css("background-color","fff");
                                }
                                if($("#txt-peso").val()==""){
                                    $("#txt-peso").css("background-color","F78181");
                                }else {
                                    $("#txt-peso").css("background-color","fff");
                                }
                                if($("#txt-altura").val()==""){
                                    $("#txt-altura").css("background-color","F78181");
                                }else {
                                    $("#txt-altura").css("background-color","fff");
                                }
                                if($("#txt-temperatura").val()==""){
                                    $("#txt-temperatura").css("background-color","F78181");
                                }else {
                                    $("#txt-temperatura").css("background-color","fff");
                                }
                                if($("#txt-presion").val()==""){
                                    $("#txt-presion").css("background-color","F78181");
                                }else {
                                    $("#txt-presion").css("background-color","fff");
                                }
                                
                        }else {
                            alert("Campos llenos");
                            $("#txt-numero").css("background-color","fff");
                            $("#txt-peso").css("background-color","fff");
                            $("#txt-altura").css("background-color","fff");
                            $("#txt-temperatura").css("background-color","fff");
                            $("#txt-presion").css("background-color","fff");
                            }
                     },
                    error:function(){
                        alert("Ocurrio un error.");
                    }
                }); 
           

        
}



 $(document).ready(function(){

        
    $("#btn-guardar").click(function(){
            validacion();
    });

    $("#btn-buscar").click(function(){
            busqueda();
    });

    $("#btn-guardarPreClinica").click(function(){
        validacionPreClinica();
    });   

    CargarCitas= function(){
         $.ajax({
                    url:"../../ajax/procesar_enfermeros.php?accion=4",
                    method:"POST",
                    
                    success:function(respuesta){
                            alert(respuesta);
                     },
                    error:function(){
                        alert("Ocurrio un error.");
                    }
                }); 
    }

     
})
       
