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
									<h4> <strong> Title:</strong>  <?php echo $request->title;?></h4>
									<div class="text-muted"><span class="m-r-10"><?php echo date('M Y', strtotime($request->created_at));?></span>
										<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> TBD</a>
									</div>
									<p><span><i class="ti-alarm-clock"></i>  Content: </span><?php echo $request->content;?></p>
									
									<button type="button"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info"><?php echo $request->contact;?>
										</button>
								</div>
							</div>
						</div>
						
						</div>
						
					<!-- end new student list -->
				</div>
			</div>