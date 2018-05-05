<?php
	require_once "clasess/blog.class.php";
	$blogObj = new blog();
	
	if($_REQUEST['submit'] == "Update"){
		
		$blogObj->Updateblog($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=blog/list-blog'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['blog_id'])){
		$blog_arr = $blogObj->getblogByID($_REQUEST['blog_id']);
		extract($blog_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Blog</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name"> Blog Title </label>
							<input name="blog_title" id="blog_title" type="text" class="form-control" value="<?php echo $blog_title; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="Course Name"> Blog Description </label>
							<input name="blog_desc" id="blog_desc" type="text" class="form-control" value="<?php echo $blog_desc; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="Image">Small Image</label>
							<input type="file" name="blog_image" id="blog_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo $blog_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
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