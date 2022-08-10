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
		<h2 class="content-heading">Ajukan Peminjaman</h2>
		<div class="row">
			<div class="col-md-12">
				<!-- Progress Wizard -->
				<div class="js-wizard-simple block">
					<!-- Step Tabs -->
					<ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">1. Info Koperasi dan Usaha</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">2. Info dan Periode Peminjaman</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#wizard-progress-step3" data-toggle="tab">3. Upload Persyaratan</a>
						</li>
					</ul>
					<!-- END Step Tabs -->

					<!-- Form -->
					<!-- <form action="" method="post"> -->
					<?php echo form_open_multipart('source/newpinjaman');?>
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
									<label for="wizard-progress-info-koperasi">Koperasi</label>
									<input type="hidden" name="username" value="<?=$this->auth_libs->user_login()->username?>">
									<select class="js-select2 form-control" id="wizard-progress-info-koperasi" name="wizard-progress-info-koperasi" size="1">
										<option value="">Kantor Koperasi</option>
										<?php
										$this->db->select('*');
										$this->db->from('koperasi_wilayah');
										$this->db->where('LENGTH(kode)', 13); # Provinsi 2, Kota 5, Kecamatan 8, Kelurahan 13
										$this->db->where('LEFT(kode, 2)=', '31'); # Jakarta 31
										$this->db->order_by('nama', 'asc');
										$wilayah = $this->db->get()->result_array();
										foreach ($wilayah as $detail_wilayah):
											?>
											<option value="<?=$detail_wilayah['nama']?>"><?=$detail_wilayah['nama']?></option>
										<?php endforeach?>
									</select>
								</div>
								<div class="form-group">
									<label for="wizard-progress-info-usaha">Info Usaha</label>
									<input class="form-control" type="text" id="wizard-progress-info-usaha" name="wizard-progress-info-usaha">
								</div>
								<div class="form-group">
									<label for="wizard-progress-jenis-usaha">Jenis Usaha</label>
									<input class="form-control" type="text" id="wizard-progress-jenis-usaha" name="wizard-progress-jenis-usaha">
								</div>
								<div class="form-group">
									<label for="wizard-progress-pendapatan-bulanan">Pendapatan Bulanan</label>
									<select class="form-control" id="wizard-progress-pendapatan-bulanan" name="wizard-progress-pendapatan-bulanan">
										<option value="">Pilih pendapatan bulanan</option>
										<option value="0-500">kurang dari Rp. 500.000,00</option>
										<option value="5-1jt">Rp. 500.000,00 - Rp. 1.000.000,00</option>
										<option value="1-2jt">Rp. 1.000.000,00 - Rp. 2.000.000,00</option>
										<option value="2-3jt">Rp. 2.000.000,00 - Rp. 3.000.000,00</option>
										<option value="3-4jt">Rp. 3.000.000,00 - Rp. 4.000.000,00</option>
										<option value="4-5jt">Rp. 4.000.000,00 - Rp. 5.000.000,00</option>
										<option value="5+jt">Lebih dari Rp. 5.000.000,00</option>
									</select>
								</div>
							</div>
							<!-- END Step 1 -->

							<!-- Step 2 -->
							<div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
								<div class="form-group">
									<label for="wizard-progress-dana-peminjaman">Jumlah Dana Peminjaman</label>
									<input class="form-control" type="number" id="wizard-progress-dana-peminjaman" name="wizard-progress-dana-peminjaman">
								</div>
								<div class="form-group">
									<label for="wizard-progress-bio">Metode Pembayaran</label>
									<div class="col-6">
										<label class="css-control css-control-primary css-radio">
											<input type="radio" class="css-control-input" name="radio-group2" value="30" checked>
											<span class="css-control-indicator"></span> Bayar Dalam 30 Hari
										</label>
										<br>
										<label class="css-control css-control-primary css-radio">
											<input type="radio" class="css-control-input" name="radio-group2" value="90">
											<span class="css-control-indicator"></span> Bayar Dalam 3 Bulan
										</label>
										<br>
										<label class="css-control css-control-primary css-radio">
											<input type="radio" class="css-control-input" name="radio-group2" value="180">
											<span class="css-control-indicator"></span> Bayar Dalam 6 Bulan
										</label>
										<br>
										<label class="css-control css-control-primary css-radio">
											<input type="radio" class="css-control-input" name="radio-group2" value="360">
											<span class="css-control-indicator"></span> Bayar Dalam 12 Bulan
										</label>
									</div>
								</div>
							</div>
							<!-- END Step 2 -->

							<!-- Step 3 -->
							<div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
								<span class="text-danger">jpeg, jpg, png, atau pdf maks 2mb</span>
								<br><br>
								<div class="form-group">
									<label class="col-12" for="example-file-input-wajah">Foto Wajah</label>
									<div class="col-12">
										<img src="#" id="wajahIMG">
										<input type="file" id="example-file-input-wajah" name="example-file-input-wajah" onchange="wajahURL(this);">
										<script type="text/javascript">
											function wajahURL(input) {
												if (input.files && input.files[0]) {
													var reader = new FileReader();

													reader.onload = function (e) {
														$('#wajahIMG').attr('src', e.target.result);
													}

													reader.readAsDataURL(input.files[0]);
												}
											}
										</script>
									</div>
								</div>
								<div class="form-group">
									<label class="col-12" for="example-file-input-ktp">Foto KTP</label>
									<div class="col-12">
										<img src="#" id="KTPIMG">
										<input type="file" id="example-file-input-ktp" name="example-file-input-ktp" onchange="KTPURL(this);">
										<script type="text/javascript">
											function KTPURL(input) {
												if (input.files && input.files[0]) {
													var reader = new FileReader();

													reader.onload = function (e) {
														$('#KTPIMG').attr('src', e.target.result);
													}

													reader.readAsDataURL(input.files[0]);
												}
											}
										</script>
									</div>
								</div>
								<div class="form-group">
									<label class="col-12" for="example-file-input-kk">Foto Kartu Keluarga</label>
									<div class="col-12">
										<img src="#" id="KKIMG">
										<input type="file" id="example-file-input-kk" name="example-file-input-kk" onchange="KKURL(this);">
										<script type="text/javascript">
											function KKURL(input) {
												if (input.files && input.files[0]) {
													var reader = new FileReader();

													reader.onload = function (e) {
														$('#KKIMG').attr('src', e.target.result);
													}

													reader.readAsDataURL(input.files[0]);
												}
											}
										</script>
									</div>
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
