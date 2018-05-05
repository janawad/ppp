	<!--Successfully announcement Add-->
	<div class="modal fade" id="add-announcement-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Gallery Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully announcement Updated-->
	<div class="modal fade" id="Update-announcement-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Gallery Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully announcement Deleted-->
	<div class="modal fade" id="Deleted-announcement-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Gallery Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/announcement.class.php";
		$announcement = new announcement();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $announcement->Addannouncement($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-announcement-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=gallery/list-gallery'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $announcement->Updateannouncement($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-announcement-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=gallery/list-gallery'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['announcement_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $announcement->Deleteannouncement($_REQUEST['announcement_id']);
			if($result==1){?>
				<script>
					$("#Deleted-announcement-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=gallery/list-gallery'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing announcement detials
		$announcement_arr = $announcement->getannouncement();
	 
	?>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new blogs---------->
							<a href='index.php?page=gallery/add-gallery' class="btn btn-primary">Add New Gallery</a></br></br>
						<!--------new blogs --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Title</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($announcement_arr as $announcement){ ?>
									<tr>
										<td>
											<?php echo $announcement['announcement_title'];?>
										</td>
										
										<td>
											<img src="<?php echo $announcement['announcement_image'];?>" width="50px">
										</td>
										
										<td>
											<?php echo $announcement['date_created'];?>
										</td>
										<td>
											<?php echo $announcement['date_updated'];?>
										</td>
										<td>
											<a href="index.php?page=gallery/edit-gallery&announcement_id=<?php echo $announcement['id']; ?>" class="btn bg-green mbottom20">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $announcement['id'];?>" name="form_delete_<?php echo $announcement['id'];?>">
												<input type="hidden" name="announcement_id" id="announcement_id" value="<?php echo $announcement['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $announcement['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $announcement['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Title</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	
	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 5, "desc" ]]
			});
		});
	</script>
	