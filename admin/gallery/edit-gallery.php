<?php
	require_once "clasess/announcement.class.php";
	$announcementObj = new announcement();
	
	if($_REQUEST['submit'] == "Update"){
		
		$announcementObj->Updateannouncement($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=gallery/list-gallery'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['announcement_id'])){
		$announcement_arr = $announcementObj->getannouncementByID($_REQUEST['announcement_id']);
		extract($announcement_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Announcement</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="announcement Name"> Announcement Title </label>
							<input name="announcement_title" id="announcement_title" type="text" class="form-control" value="<?php echo $announcement_title; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="Image">Image</label>
							<input type="file" name="announcement_image" id="announcement_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo "uploads/announcement/".$announcement_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
						</div>
						
						
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>