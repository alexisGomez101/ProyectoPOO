<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case '1': 
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");
			$conexion = new Conexion();
			$respuesta = Usuario::verificarUsuario($conexion, $_POST["txt-codigo"], $_POST["txt-contrasena"]);
			$_SESSION["cod_usuario"] = $respuesta["cod_usuario"];
			$_SESSION["nombre_Usuario"] = $respuesta["nombre_Usuario"];
			$_SESSION["cod_tipo_usuario"] = $respuesta["cod_tipo_usuario"];
			echo json_encode($respuesta);
			break;
	default:
			# code...
			break;
	}
	
?>
