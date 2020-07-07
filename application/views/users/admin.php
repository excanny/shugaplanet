<?php
    $CI =& get_instance();
 ?> 

<!-- start page content -->
<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Admin Dashboard</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
								href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Dashboard</li>
					</ol>
				</div>
			</div>




<!-- start widget -->
<div class="state-overview">
		<div class="row">
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-b-green">
					<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
					<div class="info-box-content">
						<span class="info-box-text">My Admirers</span>
						
						<div class="progress">
							
						</div>
						<span class="progress-description">
							<span class="info-box-number">TBD</span>
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-b-yellow">
					<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
						<div class="info-box-content">
						<span class="info-box-text">My Favourites</span>
						
						<div class="progress">
							
						</div>
						<span class="progress-description">
							<span class="info-box-number">TDB</span>
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-b-blue">
					<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
					<div class="info-box-content">
						<span class="info-box-text">New Ones</span>
						
						<div class="progress">
							
						</div>
						<span class="progress-description">
							<span class="info-box-number">TBD</span>
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			
			<!-- /.col -->
		</div>
	</div>
	<!-- end widget -->
	     <?php if ($this->session->userdata('success') <> '') { ?>
              <div data-alert class="alert-box success radius">
                  <strong>Success!</strong> <?php echo $this->session->userdata("success"); ?>
                <a href="#" class="close">&times;</a>
              </div>
          <?php } ?>
          <?php if ($this->session->userdata('error') <> '') { ?>
              <div data-alert class="alert-box alert radius">
                  <strong>Error!</strong> <?php echo $this->session->userdata("error"); ?>
                <a href="#" class="close">&times;</a>
              </div>
          <?php } ?>

		
					<!-- chart start -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Recent Requests</header>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
									    <?php foreach($latest_requests as $request){ ?>
										<div class="col-sm-4" style="margin:0px; padding:2px;">
										   <div class="card">
												<div class="card-head card-topline-aqua" style="border-top: 3px solid <?php echo $request->color; ?>">
													<header><?php echo ucwords($request->title); ?> </header>
													
												</div>
												
												<div class="card-body no-padding height-9">
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
							</div>
						</div>
						<div class="row">
						   <div class="col-sm-6">

						      <div class="card-box">
								<div class="card-head">
									<header>Submit New Request</header>
									
								</div>
								<div class="card-body ">
									<div class="">
										<div class="">
											<form id="Formbtn" method="post">
											<div class="form-group">
											       <input type="hidden" name="userID" id="userID" value="<?php echo $user->id; ?>">
												   <input type="hidden" name="color" id="color" value="<?php echo sprintf('#%06X', mt_rand(0, 0xFFFFFF)); ?>">
													<div class="radio p-0">
														<input type="radio" name="request_nature" id="optionsRadios1"
															value="fling" required>
														<label for="optionsRadios1">
															Fling
														</label>
													</div>
													<div class="radio p-0">
														<input type="radio" name="request_nature" id="optionsRadios2"
															value="long-term">
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
															<option value="1">Man Seeking Woman</option>
															<option value="2">Woman Seeking Man</option>
															<option value="3">Man Seeking Man</option>
															<option value="4">Woman Seeking Woman</option>
															<option value="5">Couple Seeking Man</option>
															<option value="6">Couple Seeking Woman</option>
															<option value="7">Fetishes/Groupies</option>
														</select>
													</div>
													</div>
													<div class="col-lg-3">
													  <div class="form-group">
														<input type="number" name="age" id="age" class="form-control" min="18" placeholder="Your Age">
													   </div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">
															<select id="religion" name="religion" class="form-control" required>
																<option value="">Your Belief</option>
																<option value="Christian">Christian</option>
																<option value="Muslim">Muslim</option>
																<option value="Atheist">Atheist</option>
																<option value="Other">Other</option>
															</select>
														</div>
													</div>
												</div>
												<label for="">Your Location</label>
												<div class="row">
													
													<div class="col-lg-6 ">
														<div class="form-group">
															<select name="country" class="country" id="country" class="form-control" style="width:100%;padding:.5rem 1rem; border-color: #d2d6de;font-size: 14px;" required>
																<option value="">Select Country</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<select name="state" class="state" id="state" class="form-control" style="width:100%;padding:.5rem .1rem;border-color: #d2d6de;font-size: 14px;" required>
																<option value="">Select State</option>
															</select>
														</div>
													</div>
												 </div>
												 
												<div class="form-group">
													<input type="text" placeholder="Enter Title of Request Here" name="title" id="title" class="form-control" maxlength="70" required>
												</div>
												
												<div class="form-group">
													<label> Content</label>
													<textarea class="form-control" rows="10"
														placeholder="Enter Request Here" id="content" name="content" required></textarea>
												</div>
												<div>
													Email or Phone No:  <input type="text" id="contact" name="contact" class="form-control" id="" required>
												</div>
												<!--   <div class="btn-group margin-top-20 ">
	                                                <button class="btn btn-primary btn-sm margin-right-10"><i class="fa fa-check"></i> Send</button>
                                           		</div> -->
												<br>
												<div class="box-footer">
												    <span id="loadingDiv" class="fa fa-spinner fa-spin text-warning" style="font-size:34px"></span>
													<button type="submit"
														class="btn btn-primary pull-right">
														
														Submit</button>
														
												</div>
												
											</form>
											<br>
											<h4 style="color:green; text-align:center;" id="request-result"></h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card card-box">
								<div class="card-head">
									<header>Quick Search</header>
								</div>
								<div class="card-body no-padding height-9">
								   <form action="<?php echo site_url();?>request/search" method="post">
								       <div class="form-group">
											<h4 class="">What are you looking for?</h4>
											<select class="form-control" name="request_type">
											    <option value="2">Female Seeking Male</option>
												<option value="1">Male Seeking Female</option>
												<option value="3">Male Seeking Male</option>
												<option value="4">Female Seeking Female</option>
												<option value="5">Couple Seeking Male</option>
												<option value="6">Couple Seeking Female</option>
												<option value="">Any</option>
											</select>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" class="custom-control-input" id="customRadio" name="request_nature" value="" checked>
											<label class="custom-control-label" for="customRadio">Any</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" class="custom-control-input" id="customRadio2" name="request_nature" value="fling">
											<label class="custom-control-label" for="customRadio2">Fling</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" class="custom-control-input" id="customRadio3" name="request_nature" value="long-term">
											<label class="custom-control-label" for="customRadio3">Long Term</label>
										</div>
										<div class="row">
											<div class="col-sm-12">
											    <h4 class="">Between Ages?</h4>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6">
												<select class="form-control" name="age1"><option value="">Any</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option></select>
											</div>
											<div class="col-sm-6">
											   <select class="form-control" name="age2"><option value="">Any</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option></select>
											</div>
										</div>
										<br>
										<h4 for="">Location?</h4>
                                        
										<div class="row">			
											<div class="col-lg-6 ">
												<div class="form-group">
													<select name="country" class="country2" id="country2" class="form-control" style="width:100%;padding:.5rem 1rem; border-color: #d2d6de;font-size: 14px;" required>
														<option value="">Select Country</option>
														<option value="Any">Any</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<select name="state" class="" id="state2" class="form-control" style="width:100%;padding:.5rem .1rem;border-color: #d2d6de;font-size: 14px;" required>
														<option value="">Select State</option>
													</select>
												</div>
											</div>
										</div>
								
										 <button type="submit" class="btn btn-primary float-right">Search</button>
									</form>
								</div>
							</div>
							<div class="card card-box">
								<div class="card-head">
									<header>Search Request By Date</header>
								</div>
								<div class="card-body no-padding height-9">
								   <form class="form-horizontal" action="<?php echo site_url();?>request/datesearch" method="post">
								      <div class="row">
										<div class="col-sm-4">
											<div class="form-group">
											   <label for=""> From:</label>
												<input type="text"  name="start_date" class="datepicker form-control input-sm">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
											  <label for="">To:</label>
												<input type="text"  name="end_date" class="datepicker form-control input-sm">
											</div>
										</div>
										<div class="col-sm-4">
										     <button type="submit" class="btn btn-primary float-right">Search</button>
										</div> 
									  </div> 
											
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Chart end -->
			
					<div class="row">
							<!-- Quick Mail start -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							  <div class="card-box">
								<div class="card m-3">
									<div class="card-head">
										<header>My Requests</header>
									</div>
									<div class="card-body ">
										<div class="table-scrollable">
											<table class="datatable" class="display" style="width:100%;">
												<thead>
													<tr>
														<th>ID</th>
														<th>Title</th>
														<th>Posted</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												  <?php foreach($requests as $request){ ?>
													<tr>
														<td><?php echo $request->id; ?></td>
														<td><?php echo $request->title; ?></td>
														<td><?php echo date('d-m-Y h:i a', strtotime($request->created_at)); ?></td>
														<td>
														  <form method="DELETE" action="<?php echo site_url('request/delete/'. $request->id);?>">
															<a class="" href="<?php echo site_url('request/show/'.$request->id) ?>"> <i class="fa fa-eye text-success" style="font-size: 20px;"></i> </a> 
															<a class="" href="<?php echo base_url('request/edit/'.$request->id) ?>"> <i class="fa fa-pencil fa-2x text-warning" style="font-size: 20px;"></i> </a>
																<input type="submit" onclick="return confirm('Are you sure you want to delete this record?')" value="&#xf1f8" class="fa fa-trash text-danger"> 
															</form>
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
			</div>
			<!-- end page content -->


