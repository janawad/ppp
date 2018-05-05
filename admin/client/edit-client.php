<?php
	require_once "clasess/client.class.php";
	$clientObj = new client();
	
	if($_REQUEST['submit'] == "Update"){
		
		$clientObj->Updateclient($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=client/list-client'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['client_id'])){
		$client_arr = $clientObj->getclientByID($_REQUEST['client_id']);
		extract($client_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Client</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<!--<div class="form-group">
							<label for="Course Name"> Client Title </label>
							<input name="blog_title" id="blog_title" type="text" class="form-control" value="<?php echo $blog_title; ?>" required>
						</div>-->
						
						<div class="form-group">
							<label for="Image">Client Image 1</label>
							<input type="file" name="blog_image" id="blog_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo $blog_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
						</div>
						
						<div class="form-group">
							<label for="Image">Client Image 2</label>
							<input type="file" name="blog_image_one" id="blog_image_one">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo $blog_image_one; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
						</div>
						
						<div class="form-group">
							<label for="Image_details">Client Image 3</label>
							<input type="file" name="blog_image_details" id="blog_image_details">
							<p class="help-block">1170 X 568 ( In Pixel )</p>
							<img src="<?php echo $blog_image_details; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
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