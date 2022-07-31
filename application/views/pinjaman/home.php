<!-- Sidebar -->
<nav id="sidebar">
	<!-- Sidebar Content -->
	<div class="sidebar-content">
		<!-- Side Header -->
		<div class="content-header content-header-fullrow bg-black-op-10">
			<div class="content-header-section text-center align-parent">
				<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
					<i class="fa fa-times text-danger"></i>
				</button>
				<!-- END Close Sidebar -->

				<!-- Logo -->
				<div class="content-header-item">
					<a class="link-effect font-w700" href="<?=base_url()?>">
						<img src="<?=base_url()?>media/favicons/logo.png" width="24" alt="">
						<span class="font-size-xl text-dual-primary-dark">koperasi</span><span class="font-size-xl text-primary text-muted"> online</span>
					</a>
				</div>
				<!-- END Logo -->
			</div>
		</div>
		<!-- END Side Header -->

		<!-- Side Main Navigation -->
		<div class="content-side content-side-full">
			<ul class="nav-main">
				<li>
					<a class="active" href="<?=base_url()?>source/home"><i class="si si-home"></i>Home</a>
				</li>
				<li>
					<a class="active" href="<?=base_url()?>source/guide"><i class="si si-question"></i>petunjuk</a>
				</li>
				<li>
					<a class="active" href="<?=base_url()?>source/keluar"><i class="si si-logout"></i>Keluar</a>
				</li>
			</ul>
		</div>
		<!-- END Side Main Navigation -->
	</div>
	<!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
	<!-- Header Content -->
	<div class="content-header">
		<div class="content-header-section w-100">
			<div class="row no-gutters">
				<div class="col">
					<!-- Toggle Sidebar -->
					<button type="button" class="btn btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
						<i class="fa fa-navicon"></i>
					</button>
					<!-- END Toggle Sidebar -->

				</div>
				<div class="col-3 text-center">
					<!-- Logo -->
					<div class="content-header-item">
						<a class="link-effect font-w700" href="<?=base_url()?>">
							<img src="<?=base_url()?>media/favicons/logo.png" width="24" alt="">
							<span class="d-none d-md-inline-block">
									<span class="font-size-xl text-dual-primary-dark">koperasi</span><span class="font-size-xl text-primary text-muted"> online</span>
								</span>
						</a>
					</div>
					<!-- END Logo -->
				</div>
				<div class="col text-right">
					<!-- Compose -->
					<a href="<?=base_url()?>source/home" class="btn btn-alt-primary ml-5">
						<span class="d-none d-sm-inline">Kembali</span>
					</a>
					<!-- END Compose -->
				</div>
			</div>
		</div>
	</div>
	<!-- END Header Content -->

	<!-- Header Loader -->
	<div id="page-header-loader" class="overlay-header bg-primary">
		<div class="content-header content-header-fullrow text-center">
			<div class="content-header-item">
				<i class="fa fa-sun-o fa-spin text-white"></i>
			</div>
		</div>
	</div>
	<!-- END Header Loader -->
</header>
<!-- END Header -->
<!-- Main Container -->
<main id="main-container">

	<!-- Page Content -->
	<div class="content">
		<!-- Progress Wizards -->
		<h2 class="content-heading">Progress Wizards</h2>
		<div class="row">
			<div class="col-md-12">
				<!-- Progress Wizard -->
				<div class="js-wizard-simple block">
					<!-- Step Tabs -->
					<ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">1. Personal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">2. Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#wizard-progress-step3" data-toggle="tab">3. Extra</a>
						</li>
					</ul>
					<!-- END Step Tabs -->

					<!-- Form -->
					<form action="be_forms_wizard.html" method="post">
						<!-- Wizard Progress Bar -->
						<div class="block-content block-content-sm">
							<div class="progress" data-wizard="progress" style="height: 8px;">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<!-- END Wizard Progress Bar -->

						<!-- Steps Content -->
						<div class="block-content block-content-full tab-content" style="min-height: 265px;">
							<!-- Step 1 -->
							<div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
								<div class="form-group">
									<label for="wizard-progress-firstname">First Name</label>
									<input class="form-control" type="text" id="wizard-progress-firstname" name="wizard-progress-firstname">
								</div>
								<div class="form-group">
									<label for="wizard-progress-lastname">Last Name</label>
									<input class="form-control" type="text" id="wizard-progress-lastname" name="wizard-progress-lastname">
								</div>
								<div class="form-group">
									<label for="wizard-progress-email">Email</label>
									<input class="form-control" type="email" id="wizard-progress-email" name="wizard-progress-email">
								</div>
							</div>
							<!-- END Step 1 -->

							<!-- Step 2 -->
							<div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
								<div class="form-group">
									<label for="wizard-progress-bio">Bio</label>
									<textarea class="form-control" id="wizard-progress-bio" name="wizard-progress-bio" rows="9"></textarea>
								</div>
							</div>
							<!-- END Step 2 -->

							<!-- Step 3 -->
							<div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
								<div class="form-group">
									<label for="wizard-progress-location">Location</label>
									<input class="form-control" type="text" id="wizard-progress-location" name="wizard-progress-location">
								</div>
								<div class="form-group">
									<label for="wizard-progress-skills">Skills</label>
									<select class="form-control" id="wizard-progress-skills" name="wizard-progress-skills" size="1">
										<option value="">Please select your best skill</option>
										<option value="1">Photoshop</option>
										<option value="2">HTML</option>
										<option value="3">CSS</option>
										<option value="4">JavaScript</option>
									</select>
								</div>
								<div class="form-group">
									<label class="css-control css-control-primary css-switch" for="wizard-progress-terms">
										<input type="checkbox" class="css-control-input" id="wizard-progress-terms" name="wizard-progress-terms">
										<span class="css-control-indicator"></span> Agree with the terms
									</label>
								</div>
							</div>
							<!-- END Step 3 -->
						</div>
						<!-- END Steps Content -->

						<!-- Steps Navigation -->
						<div class="block-content block-content-sm block-content-full bg-body-light">
							<div class="row">
								<div class="col-6">
									<button type="button" class="btn btn-alt-secondary" data-wizard="prev">
										<i class="fa fa-angle-left mr-5"></i> Previous
									</button>
								</div>
								<div class="col-6 text-right">
									<button type="button" class="btn btn-alt-secondary" data-wizard="next">
										Next <i class="fa fa-angle-right ml-5"></i>
									</button>
									<button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
										<i class="fa fa-check mr-5"></i> Submit
									</button>
								</div>
							</div>
						</div>
						<!-- END Steps Navigation -->
					</form>
					<!-- END Form -->
				</div>
				<!-- END Progress Wizard -->
			</div>
		</div>
	</div>
</main>
