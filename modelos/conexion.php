<?php 
	
 /**
 	class onexion a la db en mysql
 * 
 */
 class  Conexion
 {
 	
 	public static  function conectar()
 	{
 		$con=new PDO("mysql:host=localhost; dbname=qulqi","root","",
 					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
 						PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
 				);

 		return $con;
 	}
 }