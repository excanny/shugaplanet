<?php
    $CI =& get_instance();
 ?> 

<!-- start page content -->
<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class="pull-left">
						<div class="page-title"> <a href="<?php echo site_url();?>user/dashboard"> Dashboard</a></div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;Requests &nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">search results</li>
					</ol>
				</div>
			</div>

            Search Results

            <?php if(empty($search)){?>
                <div class="row text-center">
                    <div class="col-sm-6">
                        <div class="card">
                            <h4>No Results found</h4>
                            <a href="<?php echo site_url();?>user/dashboard">BACK TO DASHBOARD</a>
                        </div>
                    </div>
                </div>
            <?php }else{?>
					<!-- chart start -->
					
					<div class="row p-3">
						<?php foreach($search as $request){ ?>
						<div class="col-sm-4" style="margin:0px; padding:2px;">
						   <div class="card">
								<div class="card-head card-topline-aqua" style="border-top: 3px solid <?php echo $request->color; ?>">
									<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><?php echo ucwords($request->title); ?> </header>
									
								</div>
								
								<div class="card-body no-padding height-9">
								    <span class="badge badge-pill badge-danger float-right text-lowercase"><?php echo date('M j, \'y', strtotime($request->created_at)); ?></span>
									   <span class="badge badge-pill badge-info float-right text-lowercase"><?php echo $CI->GetRequestTypeWithID($request->request_type); ?></span><span class="badge badge-pill badge-success float-right text-lowercase"><?php echo $request->request_nature; ?></span>
									<p><i class="fa fa-commenting-o fa-lg" style="color:#F39C12;"></i> <?php echo $request->content; ?></p>
								</div>
								<div class="card-footer">
									<p>
									<span class=""> <i class="fa fa-map-marker" style=""></i>  <?php echo $request->state; ?> </span> <span class="float-right"> <i class="fa fa-vcard-o" style=""></i>  <?php echo $request->contact; ?> </span>
									</p>	
								</div>
							</div>
						</div>
					 <?php } ?>
				  </div>
            <?php } ?>


            <section>
	           <div class="container">
		         <div class="row">
			        <div class="col-lg-12">
				       <p class="" style="margin: 0 auto;"><?php echo $links; ?></p>						
			        </div>
		         </div>
	           </div>
            </section>

			
			</div>
		</div>

        



