<?php
	require_once "clasess/testimonials.class.php";
	$testimonialsObj = new testimonials();
	
	if($_REQUEST['submit'] == "Update"){
		
		$testimonialsObj->Updatetestimonials($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=testestimonials/list-testimonials'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['testimonials_id'])){
		$testimonials_arr = $testimonialsObj->gettestimonialsByID($_REQUEST['testimonials_id']);
		extract($testimonials_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New testimonials</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name"> testimonials Title </label>
							<input name="testimonials_name" id="testimonials_name" type="text" class="form-control" value="<?php echo $testimonials_name; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="Course Name"> testimonials Description </label>
							<textarea name="testimonials_desc" id="testimonials_desc" type="text" class="form-control" required><?php echo $testimonials_desc; ?></textarea>
						</div>
						
						<div class="form-group">
							<label for="Image">Small Image</label>
							<input type="file" name="testimonials_image" id="testimonials_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo $testimonials_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
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