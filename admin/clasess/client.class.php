<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class client extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert blog table
    function Addclient($request){
		extract($request);
		$blog_image = time().($_FILES['blog_image']['name']); 
		$blog_image = str_replace(' ','_',$blog_image);
		
		$blog_image_one = time().($_FILES['blog_image_one']['name']); 
		$blog_image_one = str_replace(' ','_',$blog_image_one);
		
		$blog_image_details = time().($_FILES['blog_image_details']['name']); 
		$blog_image_details = str_replace(' ','_',$blog_image_details);
		$target_path = "uploads/blog/"; 
		
		$query = "INSERT INTO client(date_created,blog_title,blog_image,blog_image_one,blog_image_details) VALUES (NOW(),'".Generic::preventSqlInjection($blog_title)."','$blog_image','$blog_image_one','$blog_image_details')";
		
		$result = mysql_query($query);
		
		if($result){
        
			move_uploaded_file($_FILES['blog_image']["tmp_name"],$target_path.$blog_image);
			move_uploaded_file($_FILES['blog_image_one']["tmp_name"],$target_path.$blog_image_one);
			move_uploaded_file($_FILES['blog_image_details']["tmp_name"],$target_path.$blog_image_details);
		
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all client list
    function getclient(){
      $query = "select * from client";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image']) : "dist/img/boxed-bg.jpg";
            $row['blog_image_one'] = $row['blog_image_one'] !==""? $this->Check_exists_img($row['blog_image_one']) : "dist/img/boxed-bg.jpg";
            $row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details']) : "dist/img/boxed-bg.jpg";
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single client details
    */
    function getclientByID($client_id){
      $query = "select * from client where id = $client_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image']) : "dist/img/boxed-bg.jpg";
        $row['blog_image_one'] = $row['blog_image_one'] !==""? $this->Check_exists_img($row['blog_image_one']) : "dist/img/boxed-bg.jpg";
        $row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details']) : "img/boxed-bg.jpg";
        return $row;
      }
    }
    
    /**
    *Update client
    */
    function Updateclient($request){
		extract($request);
		if($_FILES['blog_image']['name'] !==""){
			$blog_image = time().($_FILES['blog_image']['name']); 
			$blog_image = str_replace(' ','_',$blog_image);
			$cond1 = ",blog_image='$blog_image'";
		}
		if($_FILES['blog_image_one']['name'] !==""){
			$blog_image_one = time().($_FILES['blog_image_one']['name']); 
			$blog_image_one = str_replace(' ','_',$blog_image_one);
			$cond1 = ",blog_image_one='$blog_image_one'";
		}
		if($_FILES['blog_image_details']['name'] !==""){
			$blog_image_details = time().($_FILES['blog_image_details']['name']); 
			$blog_image_details = str_replace(' ','_',$blog_image_details);
			$cond2 = ",blog_image_details='$blog_image_details'";
		}
		$query = "update client set date_updated = NOW(),blog_title = '".Generic::preventSqlInjection($blog_title)."' ".$cond1." ".$cond2." where id = $client_id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/blog/";
			move_uploaded_file($_FILES['blog_image']["tmp_name"],$target_path.$blog_image);
			move_uploaded_file($_FILES['blog_image_one']["tmp_name"],$target_path.$blog_image_one);
			move_uploaded_file($_FILES['blog_image_details']["tmp_name"],$target_path.$blog_image_details);
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete client by id
    */
    function Deleteclient($id){
      $query = "delete from client where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
	
	
    /* check img exists or not 
      */
     function Check_exists_img($img){
       if(file_exists("uploads/blog/$img")){
           $fileName = "uploads/blog/$img";
       }else{
           $fileName = "admin/uploads/blog/$img";
       }
         return $fileName;
     }
  }  