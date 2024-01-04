Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1>Orders</h1>

				</div>

				<div class="col-sm-6">



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

						

					

						<table id="datatable" class="table table-responsive table-striped">

							<thead>

								<tr>

									<th>Si No</th>
									<th>Order ID</th>
									<th>Order Status</th>
									<th>Date</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Pincode</th>
									<th>Coupon</th>
									<th>Grand Total</th>
									<th>Payment Status</th>
									<th>Pay Mode</th>
								
									<th>Edit</th>
									
								</tr>

							</thead>

							<tbody>
								<?php 
								$i = 1;
								$ordres = $this->db->query("select * from  ordertbl order by id desc ")->result_array();

								/*$ordres = $this->db->query("select * from  ordertbl where isupload='0'  
									order by id desc ")->result_array();*/

								foreach($ordres as $row) { 
									
									?>
									<tr <?php if(!empty($row['featureimg'])) { ?> style="background-color: #ffa099;" <?php } ?>>
										<td><?=$i?></td>
										<td>
											<a href="<?=base_url();?>admin/orderdetails/<?=$row['orderno']?>">
												<?=$row['orderno']?>
											</a>
										</td>
									
										<td><?=$row['ordstatus']?></td>
										
										<td><?=date('d-m-Y',strtotime($row['ts']))?></td>
										<td><?=$row['name']?></td>
										<td><?=$row['mobile']?></td>
										<td><?=$row['pincode']?></td>
										<td><?=$row['couponis']?></td>
										<td><?=$row['grandtot']?></td>
										<td>
											<?php if($row['ispaid']=="1") { ?>
												<button class="btn-success">Success</button>
											<?php }else { ?>
												<button class="btn-danger">Pending</button>
											<?php } ?> 
										</td>
										<td><?=$row['paymode']?></td>
										<td>
											<a href="<?php echo base_url();?>admin/Adminnewcontroller/editorder/<?=$row['orderno']?>">
												<i class="fas fa-edit"></i>
											</a>
										</td>
									</tr>
								<?php  $i++;} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- /.content-wrapper