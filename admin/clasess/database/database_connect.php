<?php
class database {
  function database(){
	
	$con = mysql_connect("localhost","root","");
	
   // $con = mysql_connect("localhost","root","");
	
    if($con){
		
		$db = mysql_select_db("pppp");
		
		//$db = mysql_select_db("");
	   
    }else{
      die("connection failed");
    }
  }
}
?>