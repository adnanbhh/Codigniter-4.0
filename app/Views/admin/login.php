<!-- <div class="container">
	<div class="row">
		<div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3 bg-white from-wrapper">
			<div class="container">
				<h3>Login</h3>
				<hr>

				<?php //if(session()->get('success')): ?>
					<div class="alert alert-success" role="alert">
						<?//= session()->get('success') ?>
					</div>
				<?php //endif; ?>
				
				<form class="/" action="/" method="post">
					<div class="form-groupe">
						<label for="Email">
							Email Address
						</label>
						<input type="text" class="form-control" name="Email" id="Email" value="<?//= set_value('Email')?>">
					</div>
					<div class="form-groupe">
						<label for="Password">
							Password
						</label>
						<input type="Password" class="form-control" name="Password" id="Password" value="">
					</div>

					<?php// if(isset($validation)): ?>
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								<?//= $validation->listErrors() ?>
							</div>
						</div>
					<?php// endif ?>

					</br>
					<div class="row">
						<div class="col-12 col-sm-4">
							<button type="submite" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 -->

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Hello!</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php if(session()->get('success')): ?>
					<div class="alert alert-success" role="alert">
						<?= session()->get('success') ?>
					</div>
				<?php endif; ?>
			<form class="pt-3" action="/" method="post">
                <div class="form-group">
					<input type="text" class="form-control form-control-lg" name="Email" id="Email" value="<?= set_value('Email')?>"> 
				</div>
                <div class="form-group">
                	<input type="Password" class="form-control form-control-lg" name="Password" id="exampleInputPassword1" value="">
                </div>
				<?php if(isset($validation)): ?>
					<div class="col-12">
						<div class="alert alert-danger" role="alert">
							<?= $validation->listErrors() ?>
						</div>
					</div>
				<?php endif ?>
                <div class="mt-3">
                	<button type="submite" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="/register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
