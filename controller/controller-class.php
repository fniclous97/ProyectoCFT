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
}
?>