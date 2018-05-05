<?php
	require_once "clasess/staff_details.class.php";
	$staff_detailsObj = new staff_details();
	
	if($_REQUEST['submit'] == "Update"){
		
		$staff_detailsObj->Updatestaff_details($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=staff_details/list-staff_details'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['staff_details_id'])){
		$staff_details_arr = $staff_detailsObj->getstaff_detailsByID($_REQUEST['staff_details_id']);
		extract($staff_details_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Staff Details</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Staff Name"> Staff Name </label>
							<input name="staff_details_title" id="staff_details_title" type="text" class="form-control" value="<?php echo $staff_details_title; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="Staff Qualification">Staff qualification</label>
							<input name="staff_details_desc1" id="staff_details_desc1" type="text" class="form-control" value="<?php echo $staff_details_desc1; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="Staff Description">Description</label>
							<textarea name="staff_details_desc" id="staff_details_desc" class="form-control" style="height: 120px;" required><?php echo $staff_details_desc; ?></textarea>
						</div>
						
						
						<div class="form-group">
							<label for="Image">Staff Image</label>
							<input type="file" name="staff_details_image" id="staff_details_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo $staff_details_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
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