<?php

class Enlaces{

    public static function EnlacePaginas($url){

        if($url=="inicio" || $url=="login" || $url=="sedes" || $url=="registrar"){
            
			$module = "view/modulos/" . $url . ".php";

 		
		}else{
            $module = "view/modulos/inicio.php";
        }

		return $module;

    }




}




?>