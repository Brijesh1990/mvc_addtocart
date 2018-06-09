<?php
class connection

{
	
   public function conn()
   
   {
	   
	session_start();   
	   
	$ser="localhost";
	
	$user="root";
	
	$pass="";
	
	$db="myappss_mvc";
	
	
	$con=new mysqli($ser,$user,$pass,$db);
	
	
	return $con;   
	   
	   
	   
   }
	
	
	
	
}




?>