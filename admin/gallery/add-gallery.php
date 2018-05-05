<?php
	require_once "clasess/announcement.class.php";
	$announcementObj = new announcement();
	if($_REQUEST['submit'] == "Submit"){
  
		$announcementObj->addannouncement($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=gallery/list-gallery'; </script>";
	}
	 
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-10">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Gallery</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group col-md-5">
							<label for="announcement Name"> Gallery Name </label>
							<input name="announcement_title" id="announcement_title" type="text" class="form-control" placeholder="Enter Announcement Name">
						</div>
						
						<div class="form-group col-md-5">
							<label for="Image">Gallery Image</label>
							<input type="file" name="announcement_image" id="announcement_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
						</div>
						
						
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>