<?php
	require_once "clasess/staff_details.class.php";
	$staff_detailsObj = new staff_details();
	if($_REQUEST['submit'] == "Submit"){
  
		$staff_detailsObj->addstaff_details($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=staff_details/list-staff_details'; </script>";
	}
	 
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-10">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Staff Details</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group col-md-5">
							<label for="Staff Name"> Staff Name </label>
							<input name="staff_details_title" id="staff_details_title" type="text" class="form-control" placeholder="Enter Staff Name" required>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Staff Qualification">Staff Qualification</label>
							<input name="staff_details_desc1" id="staff_details_desc1" type="text" class="form-control" placeholder="Enter Staff Qualification..." required>
						</div>
						
						<div class="form-group col-md-5">
							<label for="staff Description">Staff Description</label>
							<textarea name="staff_details_desc" id="staff_details_desc" class="form-control" placeholder="Enter Description..." style="height: 60px;" required></textarea>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Image">Staff Image</label>
							<input type="file" name="staff_details_image" id="staff_details_image">
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