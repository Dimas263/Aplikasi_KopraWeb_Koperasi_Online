<!-- Main Container -->
<main id="main-container">

	<!-- Page Content -->
	<div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1616596871445-bb8290a7a2c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1107&q=80');">
		<div class="hero-static content content-full bg-white-op-95 invisible" data-toggle="appear">
			<!-- Header -->
			<div class="py-30 px-5 text-center">
				<a class="link-effect font-w700" href="<?=base_url()?>">
					<img src="<?=base_url()?>media/favicons/logo.png" width="156" alt="">
				</a>
				<h5 class="h5 font-w300 text-muted mb-0">ajukan pinjaman dan simpanan<br>dengan mudah dan cepat dengan<br>koperasi online</h5>
				<h2 class="h2 font-w700 mt-50 mb-10">Bergabung Bersama Kami</h2>
			</div>
			<!-- END Header -->

			<!-- Sign In Form -->
			<div class="row justify-content-center px-5">
				<div class="col-sm-8 col-md-6 col-xl-4">
					<!-- <form class="js-validation-bootstrap" action="<?=base_url('source/register')?>" method="post"> -->
						<?php echo form_open_multipart('source/register');?>
						<div class="custom-file">
							<div class="col-lg-12">
								<input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
								<label class="custom-file-label" for="example-file-input-custom">Pilih Foto</label>
							</div>
						</div>
						<br><br>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="val-name" name="val-name" placeholder="masukan nama..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="val-username" name="val-username" placeholder="masukan username..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-phoneind">Phone <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="val-phoneind" name="val-phoneind" placeholder="08xx-xxxx-xxxx">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="val-email" name="val-email" placeholder="masukan email..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="val-password" name="val-password" placeholder="masukan password..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="masukan ulang password..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<input type="checkbox" onclick="showPassword()"> Show Password
								<script>
									function showPassword() {
										var x = document.getElementById("val-password");
										var y = document.getElementById("val-confirm-password");
										if (x.type === "password" && y.type === "password") {
											x.type = "text";
											y.type = "text";
										} else {
											x.type = "password";
											y.type = "password";
										}
									}
								</script>
							</div>
						</div>
						<div class="form-group row gutters-tiny">
							<div class="col-12 mb-10">
								<button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" name="register">
									<i class="si si-login mr-10"></i> Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END Sign In Form -->
		</div>
	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->
