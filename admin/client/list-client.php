	<!--Successfully client Add-->
	<div class="modal fade" id="add-blog-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;client Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully client Updated-->
	<div class="modal fade" id="Update-blog-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;client Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully client Deleted-->
	<div class="modal fade" id="Deleted-blog-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;client Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/client.class.php";
		$client = new client();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $client->Addclient($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-client-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=client/list-client'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $client->Updateclient($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-client-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=client/list-client'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['client_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $client->Deleteclient($_REQUEST['client_id']);
			if($result==1){?>
				<script>
					$("#Deleted-client-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=client/list-client'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing client detials
		$client_arr = $client->getclient();
	 
	?>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new client---------->
							<a href='index.php?page=client/add-client' class="btn btn-primary">Add New client</a></br></br>
						<!--------new client --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<!--<th>Title</th>-->
									<th>Client Image 1</th>
									<th>Client Image 2</th>
									<th>Client Image 3</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									
								</tr>
							</thead>
							<tbody>
								<?php foreach($client_arr as $client){ ?>
									<tr>
										<!--<td>
											<?php //echo $client['blog_title'];?>
										</td>-->
										
										
										<td>
											<img src="<?php echo $client['blog_image'];?>" width="50px">
										</td>
										
										<td>
											<img src="<?php echo $client['blog_image_one'];?>" width="50px">
										</td>
										
										<td>
											<img src="<?php echo $client['blog_image_details'];?>" width="50px">
										</td>
										
										<td>
											<?php echo $client['date_created'];?>
										</td>
										
										<td>
											<?php echo $client['date_updated'];?>
										</td>
										
										<td>
											<a href="index.php?page=client/edit-client&client_id=<?php echo $client['id']; ?>" class="btn bg-green mbottom20">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $client['id'];?>" name="form_delete_<?php echo $client['id'];?>">
												<input type="hidden" name="client_id" id="client_id" value="<?php echo $client['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $client['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $client['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<!--<th>Title</th>-->
									<th>Client Image 1</th>
									<th>Client Image 2</th>
									<th>Client Image 3</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									
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
	