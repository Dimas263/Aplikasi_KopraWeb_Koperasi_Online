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
					<a href="<?=base_url()?>source/keluar" class="btn btn-alt-danger ml-5">
						<i class="fa fa-sign-out"></i>
						<span class="d-none d-sm-inline">Keluar</span>
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
		<div class="row">
			<!-- Updates -->
			<div class="col-lg-4 col-xl-9">
				<div class="block block-rounded">
					<div class="block-content block-content-full bg-primary-light">
						<form action="<?=base_url('Source/komunitas')?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control border-0" name="page-header-search-input" placeholder="Pencarian Koperasi, Forum, atau komunitas">
								<div class="input-group-append">
									<button type="submit" name="search" class="btn btn-primary border-0">
										<i class="fa fa-search mr-5"></i> Cari
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="block-content block-content-full">
						<div class="media">
							<div class="col-12">
								<a class="block block-rounded bg-gray-light text-center" href="<?=base_url('Source/pinjaman')?>">
									<div class="block-content">
										<p class="font-size-h4 font-w600">
											Ajukan Peminjaman &nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/ios-filled/50/228BE6/arrow.png"/>
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="block-content block-content-full">
						<div class="media">
							<div class="col-6">
								<a class="block block-rounded block-link-shadow bg-pulse text-right" href="<?=base_url('Source/pinjaman')?>">
									<div class="block-content block-content-full clearfix">
										<div class="float-left mt-10 d-none d-sm-block">
											<i class="fa fa-money fa-3x text-body-bg-dark text-white"></i>
										</div>
										<div class="font-size-xs font-w600 text-uppercase text-muted text-white">Pinjaman</div>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="block block-rounded block-link-shadow bg-flat text-right" href="<?=base_url('Source/pasar')?>">
									<div class="block-content block-content-full clearfix">
										<div class="float-left mt-10 d-none d-sm-block">
											<i class="fa fa-shopping-basket fa-3x text-body-bg-dark text-white"></i>
										</div>
										<div class="font-size-xs font-w600 text-uppercase text-muted text-white">Pasar</div>
									</div>
								</a>
							</div>
						</div>
						<div class="media">
							<div class="col-6">
								<a class="block block-rounded block-link-shadow bg-corporate text-right" href="<?=base_url('Source/tagihan')?>">
									<div class="block-content block-content-full clearfix">
										<div class="float-left mt-10 d-none d-sm-block">
											<i class="si si-notebook fa-3x text-body-bg-dark text-white"></i>
										</div>
										<div class="font-size-xs font-w600 text-uppercase text-muted text-white">Tagihan</div>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="block block-rounded block-link-shadow bg-earth text-right" href="<?=base_url('Source/komunitas')?>">
									<div class="block-content block-content-full clearfix">
										<div class="float-left mt-10 d-none d-sm-block">
											<i class="fa fa-users fa-3x text-body-bg-dark text-white"></i>
										</div>
										<div class="font-size-xs font-w600 text-uppercase text-muted text-white">Komunitas</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="block block-rounded">
					<div class="block-content block-content-full">
						<div class="media">
							<h3 class="block-title font-w600">Halaman Saya</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
									<i class="si si-refresh"></i>
								</button>
							</div>
						</div>
					</div>

					<div class="block-content block-content-full">
						<div class="media">
							<div class="col-6">
								<a class="block block-rounded block-link-rotate  bg-gray-light text-center" href="<?=base_url('source/tabunganku')?>">
									<div class="block-content">
										<p class="font-size-h5 font-w600">
											<img src="https://img.icons8.com/external-chloe-kerismaker/24/000000/external-Savings-banking-chloe-kerismaker.png"/> Tabunganku
										</p>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="block block-rounded block-link-rotate  bg-gray-light  text-center" href="<?=base_url('source/pinjamanku')?>">
									<div class="block-content">
										<p class="font-size-h5 font-w600">
											<img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/24/000000/external-loan-due-diligence-icongeek26-linear-colour-icongeek26.png"/> Pinjamanku
										</p>
									</div>
								</a>
							</div>
						</div>
						<div class="media">
							<div class="col-6">
								<a class="block block-rounded block-link-rotate  bg-gray-light  text-center" href="<?=base_url('source/barangku')?>">
									<div class="block-content">
										<p class="font-size-h5 font-w600">
											<img src="https://img.icons8.com/color/24/000000/product--v1.png"/> Barangku
										</p>
									</div>
								</a>
							</div>
							<div class="col-6">
								<a class="block block-rounded block-link-rotate  bg-gray-light  text-center" data-toggle="modal" data-target="#modal-fadein-komunitasku">
									<div class="block-content">
										<p class="font-size-h5 font-w600">
											<img src="https://img.icons8.com/external-flat-02-chattapat-/24/000000/external-community-social-media-flat-02-chattapat-.png"/> Komunitasku
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Updates -->

			<!-- Extra -->
			<div class="col-lg-4 col-xl-3">
				<!-- Account -->
				<div class="block block-rounded text-center font-w600">
					<div class="block-content block-content-full bg-gd-primary">
						<img class="img-avatar img-avatar96 img-avatar-thumb" src="<?=base_url()?>upload/<?=$this->auth_libs->user_login()->username?>/<?=$this->auth_libs->user_login()->gambar?>" alt="">
					</div>
					<div class="block-content block-content-full">
						<div class="border-b pb-15 mb-15">
							<?=ucfirst($this->auth_libs->user_login()->name)?><br>
							<a class="text-muted font-w300" href="javascript:void(0)">
								<?=ucfirst($this->auth_libs->user_login()->username)?>
							</a>
						</div>
						<div class="row gutters-tiny">
							<div class="col-12">
								<?php
								$id_user = $this->auth_libs->user_login()->id_user;
								/* Saldo Masuk */
								$saldo_masuk = 0;
								$this->db->select("*");
								$this->db->from("koperasi_tabungan_masuk");
								$this->db->where("id_user", $id_user);
								$tabungan_masuk = $this->db->get()->result_array();
								foreach ($tabungan_masuk as $detail_masuk):
									$saldo_masuk += $detail_masuk["uang_masuk"];
								endforeach;

								/* Saldo Keluar */
								$saldo_keluar = 0;
								$this->db->select("*");
								$this->db->from("koperasi_tabungan_keluar");
								$this->db->where("id_user", $id_user);
								$tabungan_keluar = $this->db->get()->result_array();
								foreach ($tabungan_keluar as $detail_masuk):
									$saldo_keluar += $detail_masuk["uang_keluar"];
								endforeach;
								?>
								<div class="font-size-xs text-muted">Saldo Tabungan</div><br>
								<div class="font-size-xs text-muted"><img src="https://img.icons8.com/cotton/24/000000/card-wallet--v2.png"/> Total Rp.<span><?php echo $saldo_masuk+$saldo_keluar?></span></div><br>
								<img src="https://img.icons8.com/ios-glyphs/16/40C057/long-arrow-up.png" alt=""/><b>Rp. <span class="text-primary"><?=$saldo_masuk?></span></b>
								<img src="https://img.icons8.com/ios-glyphs/16/FA5252/long-arrow-down.png" alt=""/><b>Rp. <span class="text-primary"><?=$saldo_keluar?></span></b>

							</div>
						</div>
					</div>
				</div>
				<!-- END Account -->
				<!-- Komunitas -->
				<div class="block block-rounded">
					<div class="block-header">
						<h3 class="block-title font-w600">Komunitas Teratas</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
								<i class="si si-refresh"></i>
							</button>
						</div>
					</div>
					<div class="block-content block-content-full">
						<ul class="nav-users pull-all">
							<?php
							$this->db->select('*');
							$this->db->from('koperasi_wilayah');
							$this->db->where('LENGTH(kode)', 13); # Provinsi 2, Kota 5, Kecamatan 8, Kelurahan 13
							$this->db->where('LEFT(kode, 2)=', '31');
							$this->db->order_by('RAND()');
							$this->db->limit(6);
							$wilayah = $this->db->get()->result_array();
							foreach ($wilayah as $detail_wilayah):
								?>
								<li>
									<a data-toggle="modal" data-target="#modal-fadein<?=$detail_wilayah['nama']?>">
										<img class="img-avatar" src="https://img.icons8.com/external-flat-02-chattapat-/64/000000/external-community-social-media-flat-02-chattapat-.png" alt="">
										<i class="fa fa-circle text-success"></i>
										<?=$detail_wilayah['nama']?>
									</a>
								</li>
							<?php endforeach?>
						</ul>
					</div>
					<div class="block-header">
						<a href="<?=base_url('Source/komunitas')?>"><h3 class="block-title font-w600">Lihat Semua</h3></a>
						<div class="block-options">
							<a type="button" href="<?=base_url('Source/komunitas')?>" class="btn-block-option">
								<i class="si si-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- END Komunitas -->
			</div>
			<!-- END Extra -->
		</div>
	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->

<?php
$this->db->select('*');
$this->db->from('koperasi_wilayah');
$this->db->where('LENGTH(kode)', 13); # Provinsi 2, Kota 5, Kecamatan 8, Kelurahan 13
$this->db->where('LEFT(kode, 2)=', '31');
$this->db->order_by('RAND()');
$wilayah = $this->db->get()->result_array();
foreach ($wilayah as $detail_wilayah):
	?>
	<!-- Modal -->
	<div class="modal fade" id="modal-fadein<?=$detail_wilayah['nama']?>" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-content">
						<p class="text-center">Bergabung di komunitas <?=$detail_wilayah['nama']?></p>
						<p class="text-center">Klik untuk bergabung</p>
						<form class="text-center" action="<?=base_url('Source/join_forum')?>" method="post">
							<input type="hidden" name="forum" value="<?=$detail_wilayah['nama']?>">
							<input type="hidden" name="id_user" value="<?=$this->auth_libs->user_login()->id_user?>">
							<button type="submit" name="submit" class="btn btn-outline-success btn-lg text-center">
								<?=$detail_wilayah['nama']?>
							</button>
						</form>
						<br>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Modal -->
<?php endforeach?>

<?php
$id_user = $this->auth_libs->user_login()->id_user;
$this->db->select('*');
$this->db->from('koperasi_forum');
$this->db->where('id_user', $id_user);
$komunitasku = $this->db->get()->result_array(); ?>
	<!-- Modal -->
	<div class="modal fade" id="modal-fadein-komunitasku" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-content">
						<div class="row invisible" data-toggle="appear">
							<?php foreach ($komunitasku as $forum):?>
								<div class="col-6 col-xl-3">
									<a class="block block-link-shadow text-right" href="javascript:void(0)">
										<div class="block-content block-content-full clearfix">
											<div class="float-left mt-10 d-none d-sm-block">
												<img class="img-avatar" src="https://img.icons8.com/external-flat-02-chattapat-/64/000000/external-community-social-media-flat-02-chattapat-.png" alt="">
											</div>
											<div class="font-size-sm font-w600"><?=$forum['forum']?></div>
										</div>
									</a>
								</div>
							<?php endforeach;;?>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Modal -->
