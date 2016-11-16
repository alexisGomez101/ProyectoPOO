$(document).ready(function(){

	$("#btn-ingresar").click(function(){

		$.ajax({
			url:"ajax/acciones_login.php",
			method:"POST",
			success: function(respuesta){
			alert(respuesta);
		},
		error: function(){

		}
		});

	});
})
