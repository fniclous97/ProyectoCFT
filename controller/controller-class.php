<?php
//creacion de la clase Controladora para el mvc
class Controlador{
	public function plantilla(){
		include "view/template.php";
	}
	public function controladorEnlaces(){
		if(isset($_GET["url"]) ){
			$url = $_GET["url"];
		}
		else{
			$url ="inicio";
		}
		$res = Enlaces::EnlacePaginas($url);
		include $res;

	}

	//consultar  database
	public function consultarConexion () {

		$db_data= require_once 'config/db-cfg.php';
		
		$conn = new mysqli($db_data['host'], $db_data['user'], $db_data['pass'], $db_data['database']);

		if($conn){
			
			echo "<h1>CONEXION EXITOSA</h1>";
			
		}else{
			echo "<h1>CONEXION RECHAZADA</h1>";

		}
		
	}

	public function crearBaseDatos ($dbname) {

		$db_data= require_once 'config/db-cfg.php';
		
		$conn = new mysqli($db_data['host'], $db_data['user'], $db_data['pass'], $db_data['database']);

		if($conn){
			
			echo "<h1>CONEXION EXITOSA</h1>";
			$query = printf("CREATE DATABASE `%d`",$dbname);
			mysqli_query($conn, $query);
			echo "<h2>BASE DE DATOS CREADA CON EXITO.</h2>";


			
		}else{
			echo "<h1>CONEXION RECHAZADA</h1>";

		}
		
	}

	public function crearUsuario($rut, $pass, $privi){
		$db_data= require_once 'config/db-cfg.php';
		$conn = new mysqli($db_data['host'], $db_data['user'], $db_data['pass'], $db_data['database']);
		if($conn){
			
			try {
				$query = printf("INSERT INTO `usuarios`(`rut`, `pass`, `privilegio`) VALUES ('%d', '%d', '%d');", $rut, $pas, $privi);
				mysqli_query($conn, $query);
			} catch (Exception $err) {
				echo $err;
			}
			
			
		}else{
			echo "<h1>CONEXION RECHAZADA</h1>";

		}
	}
	public function eliminarUsuario($rut, $pass){
		$db_data= require_once 'config/db-cfg.php';
		$conn = new mysqli($db_data['host'], $db_data['user'], $db_data['pass'], $db_data['database']);
		if($conn){
			
			try {
				$query = printf("DELETE FROM `usuarios` WHERE `rut` === `%d` && `pass` === `%d`;", $rut, $pas);
				mysqli_query($conn, $query);
			} catch (Exception $err) {
				echo $err;
			}
			
			
		}else{
			echo "<h1>CONEXION RECHAZADA</h1>";

		}
	}
	public function actualizarPassUsuario($rut, $pass){
		$db_data= require_once 'config/db-cfg.php';
		$conn = new mysqli($db_data['host'], $db_data['user'], $db_data['pass'], $db_data['database']);
		if($conn){
			
			try {
				$query = printf("UPDATE `usuarios` SET `pass`='%d' WHERE `rut` = '%d'", $pass, $rut);
				mysqli_query($conn, $query);
			} catch (Exception $err) {
				echo $err;
			}
			
			
		}else{
			echo "<h1>CONEXION RECHAZADA</h1>";

		}
	}
	public function mostrarUsuario($rut){
		$db_data= require_once 'config/db-cfg.php';
		$conn = new mysqli($db_data['host'], $db_data['user'], $db_data['pass'], $db_data['database']);
		if($conn){
			
			try {
				$query = printf("SELECT `id`, `rut`, `privilegio` FROM `usuarios` WHERE `rut` = %d;", $rut);
				mysqli_query($conn, $query);
			} catch (Exception $err) {
				echo $err;
			}
			
			
		}else{
			echo "<h1>CONEXION RECHAZADA</h1>";

		}
	}
}
?>