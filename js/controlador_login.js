$(document).ready(function(){
	$("#btn-ingresar").click(function(){
			var parametros = "txt-codigo"+$("#txt-codigo").val() + 
						"&txt-contrasena="+$("#txt-contrasena").val();
			alert(parametros);
			$.ajax({
				url:"ajax/acciones_login.php?accion=1",
				method: "POST",
				data: parametros,
				dataType: 'json',
				success:function(respuesta){
					$("#resultado").html(respuesta.resultado + "Tipo Usuario: " + respuesta.cod_tipo_usuario);
					if(respuesta.cod_tipo_usuario =='1')
						window.location="index_admin.php";
					else if(respuesta.cod_tipo_usuario =='2')
						window.location="index_enfermeros.php";
					else if(respuesta.cod_tipo_usuario =='3')
						window.location="index_doctor.php";
					else if(respuesta.cod_tipo_usuario =='4')
						window.location="index_farmacia.php";
				},

				error:function(){

				}
		});
	});	
});

