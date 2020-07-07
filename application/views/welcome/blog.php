



<!-- MAIN SECTION
================================================ -->
<section>
	<div id="main">
  	<div class="row">
    <div class="twelve columns">
      	
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
       
   
      </div><!-- End Comments -->
      
    </div><!--end seven-->
    
    
    </div><!--end row-->
  </div><!--end main-->
</section>
<!--END MAIN SECTION-->


