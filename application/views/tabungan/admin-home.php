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
<main id="main-container" style="min-height: 718px;">

	<!-- Page Content -->
	<div class="content">
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

		<div class="row">
			<div class="col-6">
				<div class="block">
					<div class="block-header block-header-default">
						<h3 class="block-title">Tabungan Masuk</h3>
						<div class="block-options">
							<div class="block-options-item">
								<img src="https://img.icons8.com/ios-glyphs/16/40C057/long-arrow-up.png" alt=""/>
							</div>
						</div>
					</div>
					<div class="block-content">
						<table class="table table-vcenter">
							<thead>
							<tr>
								<th class="text-center" style="width: 50px;">No.</th>
								<th>Tanggal</th>
								<th class="d-none d-sm-table-cell" style="width: 15%;">Saldo</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							$id_user = $this->auth_libs->user_login()->id_user;
							$saldo_masuk = 0;
							$this->db->select("*");
							$this->db->from("koperasi_tabungan_masuk");
							$this->db->where("id_user", $id_user);
							$tabungan_masuk = $this->db->get()->result_array();
							foreach ($tabungan_masuk as $detail_masuk): ?>
							<tr>
								<th class="text-center" scope="row"><?=$no++?></th>
								<td><?=$detail_masuk['tanggal_masuk']?></td>
								<td class="d-none d-sm-table-cell">
									<span class="badge badge-success">Rp. <?=$detail_masuk['uang_masuk']?></span>
								</td>
							</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-6">
				<div class="block">
					<div class="block-header block-header-default">
						<h3 class="block-title">Tabungan Keluar</h3>
						<div class="block-options">
							<div class="block-options-item">
								<img src="https://img.icons8.com/ios-glyphs/16/FA5252/long-arrow-down.png" alt=""/>
							</div>
						</div>
					</div>
					<div class="block-content">
						<table class="table table-vcenter">
							<thead>
							<tr>
								<th class="text-center" style="width: 50px;">No.</th>
								<th>Tanggal</th>
								<th class="d-none d-sm-table-cell" style="width: 15%;">Saldo</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							$id_user = $this->auth_libs->user_login()->id_user;
							$saldo_masuk = 0;
							$this->db->select("*");
							$this->db->from("koperasi_tabungan_keluar");
							$this->db->where("id_user", $id_user);
							$tabungan_masuk = $this->db->get()->result_array();
							foreach ($tabungan_masuk as $detail_masuk): ?>
								<tr>
									<th class="text-center" scope="row"><?=$no++?></th>
									<td><?=$detail_masuk['tanggal_keluar']?></td>
									<td class="d-none d-sm-table-cell">
										<span class="badge badge-danger">Rp. <?=$detail_masuk['uang_keluar']?></span>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->

