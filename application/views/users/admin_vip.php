
<?php
    $CI =& get_instance();
 ?> 

<!-- start page content -->
<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Dashboard</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
								href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Dashboard</li>
					</ol>
				</div>
			</div>


					
					<!-- Chart end -->
			
					<div class="row">
							<!-- Quick Mail start -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							  <div class="card-box">
								<div class="card m-3">
									<div class="card-head">
										<header>All VIPs</header>
									</div>
									<div class="card-body ">
										<div class="table-scrollable">
											<table class="datatable" class="display" style="width:100%;">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Balance</th>
														<th>Joined</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												  <?php foreach($vips as $vip){ ?>
													<tr>
														<td><?php echo $vip->id; ?></td>
														<td><?php echo $vip->first_name . ' ' . $vip->last_name; ?></td>
														<td><?php echo '₦' . ' ' . $vip->sub; ?></td>
														<td><?php echo date('d-m-Y h:i a', strtotime($vip->created_at)); ?></td>
														<td>
														  
															<a class="" href="<?php echo site_url('admin/show/'.$vip->id) ?>"> <i class="fa fa-eye text-success" style="font-size: 20px;"></i> </a> 
																													
														</td>
													</tr>
												  <?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							   </div>
						    </div>
					
				</div>
			</div>
			<!-- end page content -->


