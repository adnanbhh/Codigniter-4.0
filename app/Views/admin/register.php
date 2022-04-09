<div class="container">
	<div class="row">
		<div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3 bg-white from-wrapper">
			<div class="container">
				<h3>Register</h3>
				<hr>
				<form class="/" action="/register" method="post">
					<div class="row">
					<div class="col-12 col-sm-6">
						<div class="form-groupe">
							<label for="FirstName">
								First Name  
							</label>
							<input type="text" class="form-control" name="FirstName" id="FirstName" value="<?= set_value('FirstName')?>">
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="form-groupe">
							<label for="LastName">
								Last Name  
							</label>
							<input type="text" class="form-control" name="LastName" id="LastName" value="<?= set_value('LastName')?>">
						</div>
					</div>
					<div class="col-12">
						<div class="form-groupe">
							<label for="email">
								Email Address
							</label>
							<input type="text" class="form-control" name="Email" id="Email" value="<?= set_value('Email')?>">
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="form-groupe">
							<label for="password">
								Password
							</label>
							<input type="Password" class="form-control" name="Password" id="Password" value="">
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="form-groupe">
							<label for="Confirmepassword">
								ConfirmePassword
							</label>
							<input type="password" class="form-control" name="Confirmepassword" id="Confirmepassword" value="">
						</div>
					</div>

					<?php if(isset($validation)): ?>
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								<?= $validation->listErrors() ?>
							</div>
						</div>
					<?php endif ?>
				</div>
					</br>
					<div class="row">
						<div class="col-12 col-sm-4">
							<button type="submite" class="btn btn-primary">Register</button>
						</div>
						<div class="col-12 col-sm-4">
							<a  class="btn btn-primary" href="/Dash">back</a>
						</div>
						<div class="col-12 col-sm-8 text-right">
							<a href="/"></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
