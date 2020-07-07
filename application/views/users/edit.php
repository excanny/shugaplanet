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
				
					<!-- End course list -->
					<div class="row">
						<!-- Quick Mail start -->
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">Edit Request</header>
									
								</div>
                                <div class="card-body ">
									<div class="">
										<div class="">
											<form action="<?php echo site_url('request/update/' . $request->id);?>" method="post">


											<div class="form-group">
											       <input type="hidden" name="userID" id="userID" value="<?php echo $user->id; ?>">
												   <input type="hidden" name="color" id="color" value="<?php echo sprintf('#%06X', mt_rand(0, 0xFFFFFF)); ?>">
													<div class="radio p-0">
														<input type="radio" name="request_nature" id="optionsRadios1"
															value="fling" <?php if($request->request_nature == "fling") {echo "checked" ; }?> required>
														<label for="optionsRadios1">
															Fling
														</label>
													</div>
													<div class="radio p-0">
														<input type="radio" name="request_nature" id="optionsRadios2"
															value="long-term" <?php if($request->request_nature == "long-term") {echo "checked" ; }?>>
														<label for="optionsRadios2">
															Long Term
														</label>
													</div>
												</div>
												<div class="row">
												  <div class="col-lg-5">
													<div class="form-group">
														<select id="request_type" name="request_type" class="form-control" required>
															<option value="">Select Request Type</option>
															<option value="1" <?php echo ($request->request_type == '1'? 'selected' : '') ?>>Man Seeking Woman</option>
															<option value="2" <?php echo ($request->request_type == '2'? 'selected' : '') ?>>Woman Seeking Man</option>
															<option value="3" <?php echo ($request->request_type == '3'? 'selected' : '') ?>>Man Seeking Man</option>
															<option value="4" <?php echo ($request->request_type == '4'? 'selected' : '') ?>>Woman Seeking Woman</option>
															<option value="5" <?php echo ($request->request_type == '5'? 'selected' : '') ?>>Couple Seeking Man</option>
															<option value="6" <?php echo ($request->request_type == '6'? 'selected' : '') ?>>Couple Seeking Woman</option>
															<option value="6" <?php echo ($request->request_type == '7'? 'selected' : '') ?>>Fetishes/Groupies</option>
														</select>
													</div>
													</div>
													<div class="col-lg-3">
													  <div class="form-group">
														<input type="number" name="age" id="age" value="<?php echo $request->age; ?>" class="form-control" min="18" placeholder="Your Age">
													   </div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">
															<select id="religion" name="religion" class="form-control" required>
																<option value="">Your Belief</option>
																<option value="Christian" <?php echo ($request->religion == 'Christian'? 'selected' : '') ?>>Christian</option>
																<option value="Muslim" <?php echo ($request->religion == 'Muslim'? 'selected' : '') ?>>Muslim</option>
																<option value="Atheist" <?php echo ($request->religion == 'Atheist'? 'selected' : '') ?>>Atheist</option>
																<option value="Other" <?php echo ($request->religion == 'Other'? 'selected' : '') ?>>Other</option>
															</select>
														</div>
													</div>
												</div>
												<label for="">Your Location</label>
												<div class="row">
													
													<div class="col-lg-6 ">
														<div class="form-group">
															<select name="country" class="country3" id="country3" class="form-control" style="width:100%;padding:.5rem 1rem; border-color: #d2d6de;font-size: 14px;" required>
																<option value="">Select Country</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<select name="state" class="state3" id="state3" class="form-control" style="width:100%;padding:.5rem .1rem;border-color: #d2d6de;font-size: 14px;" required>
																<option value="">Select State</option>
															</select>
														</div>
													</div>
												 </div>
												 
												<div class="form-group">
													<input type="text" placeholder="Enter Title of Request Here" name="title" id="title" class="form-control" maxlength="70" value="<?php echo $request->title; ?>" required>
												</div>
												
												<div class="form-group">
													<label> Content</label>
													<textarea class="form-control" rows="10"
														placeholder="Enter Request Here" id="content" name="content" required><?php echo $request->content; ?></textarea>
												</div>
												<div>
													Email or Phone No:  <input type="text" id="contact" name="contact" value="<?php echo $request->contact; ?>" class="form-control" id="" required>
												</div>
												<!--   <div class="btn-group margin-top-20 ">
	                                                <button class="btn btn-primary btn-sm margin-right-10"><i class="fa fa-check"></i> Send</button>
                                           		</div> -->
												<br>
												<div class="box-footer">
												    
													<button type="submit"
														class="btn btn-primary pull-right">
														
														Update</button>
														
												</div>
												
											</form>
											<br>
											<h4 style="color:green; text-align:center;" id="request-result"></h4>
										</div>
									</div>
								</div>
						
							</div>
						</div>
						<!-- Quick Mail end -->
					</div>
					
				</div>
			</div>