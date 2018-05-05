<?php
	require_once "clasess/client.class.php";
	$clientObj = new client();
	if($_REQUEST['submit'] == "Submit"){
  
		$clientObj->addclient($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=client/list-client'; </script>";
	}
	 
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-10">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Client</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<!--<div class="form-group col-md-5">
							<label for="Course Name"> Client Title </label>
							<input name="blog_title" id="blog_title" type="text" class="form-control" placeholder="Enter facts Title" >
						</div>-->
						
						<div class="form-group col-md-5">
							<label for="Image">client Image 1</label>
							<input type="file" name="blog_image" id="blog_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Image">client Image 2</label>
							<input type="file" name="blog_image_one" id="blog_image_one">
							<p class="help-block">370 X 407 ( In Pixel )</p>
						</div>
						
						<div class="form-group col-md-5">
							<label for="Image_details">client Image 3</label>
							<input type="file" name="blog_image_details" id="blog_image_details">
							<p class="help-block">1170 X 568 ( In Pixel )</p>
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