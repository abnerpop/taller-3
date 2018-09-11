<?php

class Acceso{
	public function __construct(){
		
	}
	
public function login($user, $pass){
	
	
	
		$db = new Conexion();
		$sql = $db->query("SELECT usuario, pass FROM login;" );
		$datos = $db->recorrer($sql);
		
	  
	
	
	if($user == $datos["usuario"] && $pass == $datos["pass"]){
		echo "si iniciaste la seccion";
	}else{
		echo "No iniciaste la seccion";
	}
	
}
	
}