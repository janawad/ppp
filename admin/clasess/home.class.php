<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class home extends database {
		public function __construct(){
			parent::database();
		}
		
		/**
		 *  get testimonial for home page limit 3
		 */
		function getTestimonial(){
			$query = "select * from testimonials ORDER BY RAND() LIMIT 3";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['testimonials_image'] = $row['testimonials_image'] !==""? $this->Check_exists_img($row['testimonials_image'],"testimonials") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		
		/**
		 *  get testimonial for testimonial-page
		 */
		function getAlltestimonial(){
			$query = "select * from testimonials ORDER BY id DESC";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['testimonials_image'] = $row['testimonials_image'] !==""? $this->Check_exists_img($row['testimonials_image'],"testimonials") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		/**
		 *  get Client for Client-page
		 */
		function getAllclient(){
			$query = "select * from client";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image'],"blog") : "admin/dist/img/avatar5.png";
					$row['blog_image_one'] = $row['blog_image_one'] !==""? $this->Check_exists_img($row['blog_image_one'],"blog") : "admin/dist/img/avatar5.png";
					$row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details'],"blog") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		
		//Get all staff_details list
			function getstaff_details(){
			  $query = "select * from staff_details";
			  $result = mysql_query($query);
			  if($result){
				$data = array();
				while($row=mysql_fetch_assoc($result)){
					$row['staff_details_image'] = $row['staff_details_image'] !==""? $this->Check_exists_img($row['staff_details_image'],"staff_details") : "admin/dist/img/avatar5.jpg";
				   
					array_push($data,$row);
				 }
				 return $data;
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
					$row['announcement_image'] = $row['announcement_image'] !==""? $this->Check_exists_img($row['announcement_image'],"announcement") : "admin/dist/img/avatar5.jpg";
				   
					array_push($data,$row);
				 }
				 return $data;
			  }else{
				die("error in mysql query" . mysql_error());
			  }
			}
	
		
		//Get all blog list
			function getblog(){
			  $query = "select * from blog";
			  $result = mysql_query($query);
			  if($result){
				$data = array();
				while($row=mysql_fetch_assoc($result)){
					$row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image'],"blog") : "admin/dist/img/boxed-bg.jpg";
					$row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details'],"blog") : "admin/dist/img/avatar5.jpg";
					array_push($data,$row);
				 }
				 return $data;
			  }else{
				die("error in mysql query" . mysql_error());
			  }
			}
		
		
		/* check img exists or not 
		  */
		function Check_exists_img($img,$folder){
			if(file_exists("admin/uploads/$folder/$img")){
				$fileName = "admin/uploads/$folder/$img";
			}else{
				$fileName = "admin/dist/img/avatar5.png";
			}
			 return $fileName;
		}
	}  