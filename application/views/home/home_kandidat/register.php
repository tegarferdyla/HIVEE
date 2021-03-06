<!-- ======================= Start Page Title ===================== -->
		<!-- ======================= End Page Title ===================== -->
		
		<!-- ====================== Start Signup Form ============= -->
		<section>
			<div class="container">
				<div class="container">
					<div class="heading">
						<h2>Create Candidat Account</h2>
					</div>
					<div class="log-box">
						<div class="row">
						<div class="col-md-12">
							<div class="alert-group">
								<?php if ($this->session->flashdata('usersalah')): ?>
									<div class="alert alert-warning alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<strong>Warning!</strong> Username sudah terpakai.
									</div>
								<?php elseif ($this->session->flashdata('emailsalah')): ?>
									<div class="alert alert-warning alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<strong>Warning!</strong> Email sudah terpakai.
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
						<form class="log-form" action="<?php echo base_url('Register/DaftarKandidat');?>" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>First Name</label>
										 <span class="text-danger"><?=form_error('firstname')?></span>
										<input type="Text" class="form-control" placeholder="First Name" name="firstname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last Name</label>
										<span class="text-danger"><?=form_error('lastname')?></span>
										<input type="text" class="form-control" placeholder="Last Name" name="lastname">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email</label>
										<span class="text-danger"><?=form_error('emailkandidat')?></span>
										<input type="text" class="form-control" placeholder="Your Email.."  name="emailkandidat">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Phone Number</label>
										<span class="text-danger"><?=form_error('telpkandidat')?></span>
										<input type="number" class="form-control" placeholder="Telp"  name="telpkandidat">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Username</label>
										<span class="text-danger"><?=form_error('usernamekandidat')?></span>
										<input type="text" class="form-control" placeholder="Username"  name="usernamekandidat">
									</div>
								</div>
							</div>			
							<div class="row">
								<div class="col-md-12">
									<span class="text-danger"><?=form_error('passkandidat')?></span>
									<span class="text-danger"><?=form_error('repassword')?></span>
								</div>
							</div>				
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="********" name="passkandidat">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" class="form-control" placeholder="********" name="repassword">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center mrg-top-15">
										<button type="submit" class="btn theme-btn btn-m">Create An Account</button>
									</div>
								</div>
							</div>
							
						</form>
						
						<div class="log-option"><span>OR</span></div>
						
						<div class="row">
							<div class="col-md-6">
								<a href="signup.html#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>SignUP With Facebook</a>
							</div>
							<div class="col-md-6">
								<a href="signup.html#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>SignUp With Google+</a>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</section>
		<!-- ====================== End Signup Form ============= -->