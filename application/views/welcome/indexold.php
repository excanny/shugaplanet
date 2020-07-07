
<div class="twelve columns">
      <div class="row">
      
      	<!--Form wrapper-->
        <div class="five columns form-wrapper">
        
          <div class="form-header">
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
            <p class="lead text-resize">Serious connections with <strong>ShugaPlanet</strong><br>Your perfect search is just a click away</p>
          </div>
        
          <!--Form footer-->
          <div class="form-footer silver-bg">
    
            <div class="clearfix"></div>
          
            <div id="" class="">
                <div class="row">
                  <div class="twelve columns">
                    <h5 class="pink-text"></i> CREATE AN ACCOUNT </h5>	
                  </div>
                  <form action="<?php echo site_url();?>user/RegisterAction" method="post">
                    <div class="six columns">
                      <input type="text" id="first_name" name="first_name" class="" required>
                    </div>
                    <div class="six columns">
                      <input type="text" id="last_name" name="last_name" class="inputbox" placeholder="Last Name" required>
                    </div>
                    <div class="six columns">
                      <input type="text" name="username" class="inputbox" placeholder="Username" required>
                    </div>
                    <div class="six columns">
                      <input type="email" name="email" class="inputbox" placeholder="Email" required>
                    </div>
                    <div class="six columns">
                      <input type="password"  name="password" class="inputbox" placeholder="Password" required>
                    </div>
                    <div class="six columns">
                      <input type="password"  name="password2" class="inputbox" placeholder="Confirm Password" required>
                    </div>
                    <div class="six columns">
                      <select class="expand" name="gender" style="padding: 6px;border: 1px solid #ccc;" required>
                        <option value="">Select Gender</option>
                        <option value="Man">Man</option>
                        <option value="Woman">Woman</option>
                      </select>
                    </div>
                    <div class="six columns">
                      <select name="sexuality" style="padding: 6px; display: block;  margin: 0 0 12px 0; border: 1px solid #ccc;" required>
                      <option value=""> Select Sexuality</option>
                        <option value="Straight">Straight</option>
                        <option value="Bisexual">Bisexual</option>
                        <option value="Gay">Gay</option>
                        <option value="Lesbian">Lesbian</option>
                      </select>
                    </div>
                    <br>
                    <div class="six columns">
                      <input type="text" name="dob" placeholder="Date Of Birth" class="datepicker" required>
                    </div>
                    <div class="six columns">
                      <select id="country" name="country" class="expand" style="padding: 6px; display: block;  margin: 0 0 12px 0; border: 1px solid #ccc;" required>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria" selected>Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      <!-- <input type="hidden" id="country_code" /> -->
                    </div>
                    <div class="twelve columns text-center">
                       <input type="submit"  class="button" value="SIGN UP IN 30 SECONDS" style="background:#FF0461;border:none;">
                    </div>
                  </form>
                </div><!--end row--
              </div><!-- end register panel -->

          </div><!--end form-footer-->
  
        </div><!--end form-wrapper-->
      </div><!--end row-->
    </div><!--end twelve-->


    </div><!--end row-->
</div><!--end #header-->
</div><!--end header-bg-->
</header>
<!--END HEADER SECTION-->





<!-- CALL TO ACTION SECTION
================================================ -->
<section>
  <div id="call-to-actions" class="silver-bg">
    <div class="row map-bg">
    
      <div class="twelve columns">
        <h1 class="section-title">Looking for <span class="pink-text">love</span>?</h1>
        <p class="lead">Make a move now by registering to submit a <span class="pink-text">free</span> request</p>
        
        <!-- Video - Hidden by default-->
        <!-- <div id="markerPoint"></div>
        <div id="video">
          <div class="central">
            <a href="#" id="videoClose"><i class="icon-off icon-2x"></i></a>
            <div id="videoLoad" class="flex-video widescreen">
            
            	YOUTUBE EXAMPLE-->
              <!--<iframe id="tours" src="http://www.youtube.com/embed/FtquI061bag"></iframe>
              
              <embed id="tours" flashvars='file=http%3A%2F%2F1.s3.envato.com%2Ffiles%2F27626529%2FMVI_6215-18.flv&amp;image=http%3A%2F%2F1.s3.envato.com%2Ffiles%2F27626530%2FMVI_6215-18.jpg&amp;skin=http%3A%2F%2Fvideohive.net%2Fvideo_player%2Fmodieus.zip&amp;autostart=true' wmode='transparent' src='http://videohive.net/video_player/player.swf' />
            </div>
          </div>
        </div> -->
        
        <!--Take action-->
        <div class="take-action">
          <ul class="button-group radius expand left">
            <li><a class="button large expand alert" href="#" data-reveal-id="register" class="small button radius">Join us for FREE</a></li>
          </ul>
          
        </div>
        <!--end take-action-->
      </div><!--end twelve-->

        <!--Status Icons-->
        <!-- <div class="status three columns mobile-one">
          <div class="icon" data-animation="pulse">
            <img src="assets/images/icons/steps/status_01.png" width="213" height="149" alt="">
          </div>
          <ul class="block-grid">
            <li class="title">5 million</li>
            <li class="subtitle">Members in total</li>
          </ul>
        </div>
        
        <div class="status three columns mobile-one">
          <div class="icon" data-animation="pulse">
            <img src="assets/images/icons/steps/status_02.png" width="213" height="149" alt="">
          </div>
          <ul class="block-grid">
            <li class="title">947</li>
            <li class="subtitle">Members online</li>
          </ul>
        </div>
        
        <div class="status three columns mobile-one">
          <div class="icon" data-animation="pulse">
            <img src="assets/images/icons/steps/status_03.png" width="213" height="149" alt="">
          </div>
          <ul class="block-grid">
            <li class="title">530</li>
            <li class="subtitle">Women online</li>
          </ul>
        </div>
        
        <div class="status three columns mobile-one">
          <div class="icon" data-animation="pulse">
            <img src="assets/images/icons/steps/status_04.png" width="213" height="149" alt="">
          </div>
          <ul class="block-grid">
            <li class="title">417</li>
            <li class="subtitle">Men online</li>
          </ul>
        </div> -->
        <!--end status icons-->
      
    </div><!--end row map-bg-->
  </div><!--end call-to-actions-->
</section>
<!--END CALL TO ACTION SECTION-->





<!-- FEATURED TEXT SECTION
================================================ -->
<!-- <section>
  <div id="feature-text" class="text-center">
    <div class="row">
      <div class="twelve columns">
        <h2><span class="no-bg">Why Choose To <span class="pink-text">Become a Member?</span></span></h2>
        <p class="lead">Here you have some reasons and some features. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div><!--end twelve
      
      <ul class="no-bullet">
        <li class="four columns">
          <div class="circle">
            <a href="assets/images/small_thumb_01.png" class="imagelink" data-rel="prettyPhoto[gallery1]">
              <span class="overlay"></span>
              <span class="read"><i class="icon-heart"></i></span>
              <img src="assets/images/small_thumb_01.png" alt="">
            </a>
          </div>
          <h4>100% for FREE</h4>
          <p>You can register and create your profile for FREE! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          <p><a href="#" class="small button radius secondary"><i class="icon-angle-right"></i> READ MORE</a></p>
        </li>
        
        <li class="four columns">
          <div class="circle">
            <a href="assets/images/small_thumb_02.png" class="imagelink" data-rel="prettyPhoto[gallery1]">
              <span class="overlay"></span>
              <span class="read"><i class="icon-heart"></i></span>
              <img src="assets/images/small_thumb_02.png" alt="">
            </a>
          </div>
          <h4>Matching compatible partner</h4>
          <p>Invite friends to help you find your perfect match. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p><a href="#" class="small button radius secondary"><i class="icon-angle-right"></i> READ MORE</a></p>
        </li>
        
        <li class="four columns">
          <div class="circle">
            <a href="assets/images/small_thumb_03.png" class="imagelink" data-rel="prettyPhoto[gallery1]">
              <span class="overlay"></span>
              <span class="read"><i class="icon-heart"></i></span>
              <img src="assets/images/small_thumb_03.png" alt="">
            </a>
          </div>
          <h4>Share experiences</h4>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p><a href="#" class="small button radius secondary"><i class="icon-angle-right"></i> READ MORE</a></p>
        </li>
      </ul>
    </div><!--end row
  </div><!--end feature-text
</section> -->
<!--END FEATURED TEXT SECTION-->

  



<!-- TESTIMONIALS SECTION
================================================ -->
<section>
	<div id="testimonials">
  	<div class="row">
    	<div class="twelve columns"><hr>
      	<ul class="testimonials-carousel">
        	<li>
          	<div class="quote-content">
            Being deeply loved by someone gives you strength, while loving someone deeply gives you courage. 

            </div>
          	<div class="quote-author">
            	<strong>Lao Tzu</strong>
              <span class="author-description"> - Ancient Chinese philosopher and writer</span>
            </div>
            
          </li>
          
        	<li class="hide-on-mobile">
            <div class="quote-content">
            Love, having no geography, knows no boundaries.

            </div>
            <div class="quote-author">
            	<strong>Truman Capote</strong>
              <span class="author-description"> - American novelist</span>
            </div>
          </li>
          
          <li class="hide-on-mobile">
            <div class="quote-content">
            Love has reasons which reason cannot understand.
            </div>
            <div class="quote-author">
            	<strong>Blaise Pascal</strong>
              <span class="author-description"> - French writer</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--END TESTIMONIALS SECTION-->





<!-- SUPPORT & NEWSLETTER SECTION
================================================ -->
<section>
  <div id="">
    <div class="row">
      
      <div class="four columns">
      	<div class="panel">
      		<h4><i class="icon-question-sign"></i> Concerns or questions?</h4>
          <p>Kindly write us below:</p>
          <form id="c_form" method="post">
            <div class="row">
              <div class="small-8">
                <div class="row">
                  <div class="small-3 columns">
                  <br>
                    <label for="right-label" class="right">Name:</label>
                  </div>
                  <div class="small-9 columns">
                    <input type="text" id="c_name" name="c_name" required>
                  </div>
                </div>
                <div class="row">
                  <div class="small-3 columns">
                  <br>
                    <label for="right-label" class="right">Email:</label>
                  </div>
                  <div class="small-9 columns">
                    <input type="email" id="c_email" name="c_email" required>
                  </div>
                </div>
                <div class="row">
                  <div class="small-3 columns">
                  <br>
                    <label for="right-label" class="right">Subject:</label>
                  </div>
                  <div class="small-9 columns">
                    <input type="text" id="c_subject" name="c_subject" required>
                  </div>
                </div>
                <div class="row">
                  <div class="small-3 columns">
                  <br>
                    <label for="right-label" class="right">Message:</label>
                  </div>
                  <div class="small-9 columns">
                     <textarea class="" id="c_msg" name="c_msg" required></textarea>
                  </div>
                </div>
                <div class="callout clearfix">
                  <div class="row">
                   <div class="six columns">
                      <span id="loadingDiv2" class="fa fa-spinner fa-spin text-warning" style="font-size:34px"></span>
                    </div>
                   <div class="six columns">
                       <input type="submit" class="small radius button float-right" value="SUBMIT">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <h5 style="color:green; text-align:center;" id="request-result2"></h5>
    		</div><!--end panel-->
      </div>
      
      <div class="eight columns">
      	<div class="panel">
      		<h4><i class="icon-thumbs-up"></i> NEWSLETTER SIGNUP</h4>
        	<p>By subscribing to our mailing list you will always be update with the latest news from us.</p>
          
          <!--Newsletter form-->
          <form id="newsletterForm" name="newsletter-form" method="post" class="row">
            <div class="four columns">
              <div class="row collapse">
                <div class="two mobile-one columns">
                	<span class="prefix"><i class="icon-user"></i></span>
                </div>
                <div class="ten mobile-three columns">
                	<input type="text" name="n_name" id="n_name" placeholder="Your name" required>
                </div>
              </div>
            </div>
            <div class="five columns">
              <div class="row collapse">
                <div class="two mobile-one columns">
                	<span class="prefix"><i class="icon-envelope"></i></span>
                </div>
                <div class="ten mobile-three columns">
                	<input type="email" name="n_email" id="n_email" placeholder="Your email" required>
                </div>
              </div>
            </div>
            <div class="three columns">
            	<p><button type="submit" id="newsletter-submit" name="newsletter-submit" class="small radius button expand">SUBSCRIBE</button></p>
            </div>
          </form><!--end newsletter-form-->
          <div class="row">
            <div class="six columns">
                <span id="loadingDiv3" class="fa fa-spinner fa-spin text-warning" style="font-size:31px"></span>
            </div>
            <div class="six columns">
               <h5 style="color:green; text-align:center;" id="request-result3"></h5>
            </div>
          </div>
          
    		</div><!--end panel-->
      </div>
      
    </div><!--end row-->
  </div><!--end support-->
</section>
<!--END SUPPORT & NEWSLETTER SECTION-->