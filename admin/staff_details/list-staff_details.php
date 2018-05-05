	<!--Successfully staff_details Add-->
	<div class="modal fade" id="add-staff_details-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;staff_details Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully staff_details Updated-->
	<div class="modal fade" id="Update-staff_details-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;staff_details Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully staff_details Deleted-->
	<div class="modal fade" id="Deleted-staff_details-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;staff_details Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/staff_details.class.php";
		$staff_details = new staff_details();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $staff_details->Addstaff_details($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-staff_details-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=staff_details/list-staff_details'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $staff_details->Updatestaff_details($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-staff_details-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=staff_details/list-staff_details'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['staff_details_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $staff_details->Deletestaff_details($_REQUEST['staff_details_id']);
			if($result==1){?>
				<script>
					$("#Deleted-staff_details-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=staff_details/list-staff_details'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing staff_details detials
		$staff_details_arr = $staff_details->getstaff_details();
	 
	?>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new blogs---------->
							<a href='index.php?page=staff_details/add-staff_details' class="btn btn-primary">Add New Staff Details</a></br></br>
						<!--------new blogs --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Name</th>
									<th>Qualification</th>
									<th>Description</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($staff_details_arr as $staff_details){ ?>
									<tr>
										<td>
											<?php echo $staff_details['staff_details_title'];?>
										</td>
										
										<td>
											<?php echo $staff_details['staff_details_desc1'];?>
										</td>
										
										<td>
											<?php echo $staff_details['staff_details_desc'];?>
										</td>
										
										<td>
											<img src="<?php echo $staff_details['staff_details_image'];?>" width="50px">
										</td>
										
										<td>
											<?php echo $staff_details['date_created'];?>
										</td>
										<td>
											<?php echo $staff_details['date_updated'];?>
										</td>
										<td>
											<a href="index.php?page=staff_details/edit-staff_details&staff_details_id=<?php echo $staff_details['id']; ?>" class="btn bg-green mbottom20">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $staff_details['id'];?>" name="form_delete_<?php echo $staff_details['id'];?>">
												<input type="hidden" name="staff_details_id" id="staff_details_id" value="<?php echo $staff_details['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $staff_details['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $staff_details['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Qualification</th>
									<th>Description</th>
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
	