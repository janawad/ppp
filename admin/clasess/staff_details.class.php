<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class staff_details extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert staff_details table
    function Addstaff_details($request){
		extract($request);
		$staff_details_image = time().($_FILES['staff_details_image']['name']); 
		$staff_details_image = str_replace(' ','_',$staff_details_image);
		
		$target_path = "uploads/staff_details/"; 
		
		$query = "INSERT INTO staff_details(date_created,staff_details_title,staff_details_desc,staff_details_desc1,staff_details_image) VALUES (NOW(),'".Generic::preventSqlInjection($staff_details_title)."','".Generic::preventSqlInjection($staff_details_desc)."','".Generic::preventSqlInjection($staff_details_desc1)."','$staff_details_image')";
		
		$result = mysql_query($query);
		
		if($result){
        
			move_uploaded_file($_FILES['staff_details_image']["tmp_name"],$target_path.$staff_details_image);
			
		
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all staff_details list
    function getstaff_details(){
      $query = "select * from staff_details";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['staff_details_image'] = $row['staff_details_image'] !==""? $this->Check_exists_img($row['staff_details_image']) : "dist/img/boxed-bg.jpg";
           
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single staff_details details
    */
    function getstaff_detailsByID($staff_details_id){
      $query = "select * from staff_details where id = $staff_details_id";
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
    function Updatestaff_details($request){
		extract($request);
		if($_FILES['staff_details_image']['name'] !==""){
			$staff_details_image = time().($_FILES['staff_details_image']['name']); 
			$staff_details_image = str_replace(' ','_',$staff_details_image);
			$cond1 = ",staff_details_image='$staff_details_image'";
		}
		
		$query = "update staff_details set date_updated = NOW(),staff_details_title = '".Generic::preventSqlInjection($staff_details_title)."',staff_details_desc = '".Generic::preventSqlInjection($staff_details_desc)."',staff_details_desc1 = '".Generic::preventSqlInjection($staff_details_desc1)."' ".$cond1." where id = $staff_details_id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/staff_details/";
			move_uploaded_file($_FILES['staff_details_image']["tmp_name"],$target_path.$staff_details_image);
			
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete staff_details by id
    */
    function Deletestaff_details($id){
      $query = "delete from staff_details where id = $id";
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
       if(file_exists("uploads/staff_details/$img")){
           $fileName = "uploads/staff_details/$img";
       }else{
           $fileName = "admin/uploads/staff_details/$img";
       }
         return $fileName;
     }
  }  