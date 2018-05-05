<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class announcement extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert announcement table
    function Addannouncement($request){
		extract($request);
		$announcement_image = time().($_FILES['announcement_image']['name']); 
		$announcement_image = str_replace(' ','_',$announcement_image);
		
		$target_path = "uploads/announcement/"; 
		
		$query = "INSERT INTO announcement(date_created,announcement_title,announcement_date,announcement_desc,announcement_image) VALUES (NOW(),'".Generic::preventSqlInjection($announcement_title)."','".Generic::preventSqlInjection($announcement_date)."','".Generic::preventSqlInjection($announcement_desc)."','$announcement_image')";
		
		$result = mysql_query($query);
		
		if($result){
        
			move_uploaded_file($_FILES['announcement_image']["tmp_name"],$target_path.$announcement_image);
			
		
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all announcement list
    function getannouncement(){
      $query = "select * from announcement";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['announcement_image'] = $row['announcement_image'] !==""? $this->Check_exists_img($row['announcement_image']) : "dist/img/boxed-bg.jpg";
           
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single announcement details
    */
    function getannouncementByID($announcement_id){
      $query = "select * from announcement where id = $announcement_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['staff_details_image'] = $row['staff_details_image'] !==""? $this->Check_exists_img($row['staff_details_image']) : "dist/img/boxed-bg.jpg";
        
        return $row;
      }
    }
    
    /**
    *Update blog
    */
    function Updateannouncement($request){
		extract($request);
		if($_FILES['announcement_image']['name'] !==""){
			$announcement_image = time().($_FILES['announcement_image']['name']); 
			$announcement_image = str_replace(' ','_',$announcement_image);
			$cond1 = ",announcement_image='$announcement_image'";
		}
		
		$query = "update announcement set date_updated = NOW(),announcement_title = '".Generic::preventSqlInjection($announcement_title)."',announcement_date = '".Generic::preventSqlInjection($announcement_date)."',announcement_desc = '".Generic::preventSqlInjection($announcement_desc)."' ".$cond1." where id = $announcement_id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/announcement/";
			move_uploaded_file($_FILES['announcement_image']["tmp_name"],$target_path.$announcement_image);
			
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete announcement by id
    */
    function Deleteannouncement($id){
      $query = "delete from announcement where id = $id";
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
       if(file_exists("uploads/announcement/$img")){
           $fileName = "uploads/announcement/$img";
       }else{
           $fileName = "admin/uploads/announcement/$img";
       }
         return $fileName;
     }
  }  