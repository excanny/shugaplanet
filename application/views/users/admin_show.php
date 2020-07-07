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
					
					<!-- end widget -->
					
					<!-- Chart end -->
					<!-- start course list -->
					<div class="row">
						<div class="col-lg-10 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="course-box"> 
									<h4> <strong> Name:</strong>  <?php echo $user->first_name . ' ' . $user->last_name;?></h4>
									<div class="">Balance: <span class="text-muted m-r-10"><?php echo '₦'  . ' ' . $user->sub;?></span>
										<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> TBD</a>
									</div>
									<br>
									<form class="form-horizontal" action="<?php echo site_url('admin/fund/' . $user->id);?>" method="post">
									   <div class="row">
										  <div class="col-sm-3">
											<div class="form-group">
											   <label for=""> Amount to fund:</label>
											   <input type="number" min="5000" name="sub2" class="form-control" required>
										     </div>	
										   </div>
									   
										</div>
										   <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to fund this wallet?')">FUND</button>
										 
									</form>
								</div>
							</div>
						</div>
						
						
					<!-- end new student list -->
				</div>
			</div>