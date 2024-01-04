<?php
if(!empty($pgconres))
{
	$id = $pgconres[0]['id'];
	$section = $pgconres[0]['section'];
	$heading = $pgconres[0]['heading'];
	$description = $pgconres[0]['description'];
}else{
	$id = "";
	$section = "";
	$heading = "";
	$description = "";
}
?>



<!-- Content Wrapper. Contains page content -->



<div class="content-wrapper">



	<!-- Content Header (Page header) -->



	<section class="content-header">



		<div class="container-fluid">



			<div class="row mb-2">



				<div class="col-sm-6">



					<h1>Partners</h1>



				</div>

			</div>



		</div><!-- /.container-fluid -->



	</section>







	<!-- Main content -->



	<section class="content">



		<div class="row">



			<div class="col-12">



				<div class="card">



					<div class="card-header">



					<?php if($this->session->flashdata('del')): ?>

						<div class="alert alert-danger" role="alert" style="margin-top: 25px;">

							<?php echo $this->session->flashdata('del'); ?>

						</div>

					<?php endif; ?>

					<?php if($this->session->flashdata('msg')): ?>

						<div class="alert alert-success" role="alert" style="margin-top: 25px;">

							<?php echo $this->session->flashdata('msg'); ?>

						</div>

					<?php endif; ?>

				</div>



					<!-- /.card-header -->
					



					<div class="card-body">
						<form name="" method="post" action="<?=base_url();?>admin/Sectioncontent/section5post">
						<div class="row col-12">
							<input type="hidden" name="id" value="<?=$id?>">
						<div class="col-4">
							<label>Heading</label>
							<input type="text" name="heading" value="<?=$heading?>" class="form-control">
						</div>
						<div class="col-2" style="margin-top: 27px;">
							<input type="submit" name="submit" class="btn btn-primary">
						</div>
					</div>
					</form>


						<div class="text-right mb-3">

							<a href="<?=base_url()?>admin/partneradd">

								<button class="btn btn-primary">Add Partner</button>

							</a>							

						</div> 



						<table id="datatable" class="table table-bordered table-striped">



							<thead>



								<tr>



									<th>Si No</th>

									<th>Icon</th>

									<th>Comp Name</th>

									<th>Modify</th>

									<th>Delete</th>

								</tr>



							</thead>



							<tbody>

								<?php 

								$i = $this->uri->segment(3);

								foreach($res as $row) { $i++; ?>

									<tr>

										<td><?=$i?></td>

										<td>

											<img height="50px" width="50px" src="<?=base_url();?>uploads/<?=$row['iconimgae']?>">

										</td>

										<td><?=$row['compnyname']?></td>

										<td>

											<a href="<?php echo base_url();?>admin/Managepage/partnersave/<?=$row['id']?>">

												<i class="lni-pencil-alt"></i>

											</a>

										</td>

										<td>

											<a href="<?php echo base_url();?>admin/Managepage/partnerdelete/<?=$row['id']?>"

												onclick="return confirm('Are you sure ?')">

												<i class="lni-trash"></i>

											</a>

										</td>

									</tr>

								<?php } ?>

							</tbody>

						</table>

					</div>



					<!-- /.card-body -->



				</div>



				<!-- /.card -->



			</div>



			<!-- /.col -->



		</div>



		<!-- /.row -->



	</section>



	<!-- /.content -->



</div>



<!-- /.content-wrapper -->