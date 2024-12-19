<?php
/**
 * Template Name: Withdraw
 */

?>

<?php include 'portal-header.php'; ?>



  <div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h4 class="fw-semibold mb-0">Withdraw</h4>
</div>
    
    <div class="row gy-4">
      <div class="col-md-6">
        <div class="card">
        
          
        </div>
      </div>
      
    </div>
  </div>

  <div class="card h-100 p-0 radius-12">
            <div class="card-body p-24">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-10">
                        <div class="card border">
                            <div class="card-header">
            <h5 class="card-title mb-0">Enter Your Details Below</h5>
          </div>
                           <div class="card-body">
            <div class="row gy-3">
           <?php echo do_shortcode('[contact-form-7 id="b2ffe61" title="Withdraw Form"]'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 LX Network. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">Parallel Digital</span></p>
    </div>
  </div>
</footer>
</main>
  
  <?php include 'portal-footer.php'; ?>