

<!-- MAIN SECTION
================================================ -->
<section>
	<div id="main">
  	<div class="row">
    <div class="seven columns">
      	
      <!-- Begin Comments -->
      <div class="comments">

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
       
        <h4>Reset Password:</h4><br>
        <?php echo $this->session->userdata('recover_email'); ?>
        <!--Leave comment form-->
        <form action="<?php echo site_url(); ?>user/UpdatePassword" method="post" class="leave-comment clearfix">
          <div class="row">
            <div class="twelve columns">
              <label>New Password<span> (required)</span></label>
              <input type="password" name="pssd" required>
            </div>
          </div>
          <div class="row">
            <div class="twelve columns">
              <label>Comfirm Passwoord<span> (required)</span></label>
              <input type="password" name="pssd2" required>
            </div>
          </div>
          <button type="submit" class="radius button right">Reset</button>     
        </form><!--end leave-comment-->
      </div><!-- End Comments -->
      
    </div><!--end seven-->
    
    
    </div><!--end row-->
  </div><!--end main-->
</section>
<!--END MAIN SECTION-->


