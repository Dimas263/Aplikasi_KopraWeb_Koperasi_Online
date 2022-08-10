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
		<h2 class="content-heading">Pinjamanku</h2>
		<?php
		$no = 1;
		$username = $this->auth_libs->user_login()->username;
		$this->db->select('*');
		$this->db->from('koperasi_pinjaman kp');
		$this->db->join('koperasi_user ku', 'ku.username=kp.username');
		$this->db->where('kp.username', $username);
		$this->db->order_by('tanggal','asc');
		$project = $this->db->get()->result_array();
		foreach ($project as $pinjamanlist) : ?>
		<div class="block">
			<div class="block-header block-header-default">
				<h3 class="block-title">Pinjaman ke-<?=$no++?></h3>
				<span class="text-primary"><?=$pinjamanlist['tanggal']?></span>
			</div>
			<div class="block-content">
				<form action="#" method="post" onsubmit="return false;">
					<div class="row">
						<div class="col-md-7">
							<div class="form-group row">
								<div class="col-2">
									<img src="<?=base_url()?>/upload/<?=$username?>/<?=$pinjamanlist['gambar']?>" width="75">
								</div>
								<div class="col-5">
									<label for="mega-firstname">Name</label>
									<input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" value="<?=$pinjamanlist['name']?>">
								</div>
								<div class="col-5">
									<label for="mega-lastname">No. Telp</label>
									<input type="text" class="form-control form-control-lg" id="mega-lastname" name="mega-lastname" value="<?=$pinjamanlist['telp']?>">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<div class="col-12">
									<label for="mega-lastname">Email</label>
									<input type="text" class="form-control form-control-lg" id="mega-username" name="mega-username" value="<?=$pinjamanlist['email']?>">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="form-group row">
								<div class="col-12">
									<label for="mega-bio">QR Code</label>
									<?php
									$name = $pinjamanlist['name'];
									$username = $pinjamanlist['username'];
									$telp = $pinjamanlist['telp'];
									$email = $pinjamanlist['email'];
									$nama_koperasi = $pinjamanlist['nama_koperasi'];
									$info_usaha = $pinjamanlist['info_usaha'];
									$jenis_usaha = $pinjamanlist['jenis_usaha'];
									$jumlah_dana = $pinjamanlist['jumlah_dana'];
									$metode = $pinjamanlist['metode_pembayaran'];
									$wajah = $pinjamanlist['foto_wajah'];
									$ktp = $pinjamanlist['foto_ktp'];
									$kk = $pinjamanlist['foto_kartu_keluarga'];
									$dataQR = "$name+$username+$telp+$email+$nama_koperasi+$info_usaha+$jenis_usaha+$jumlah_dana+$metode+$wajah+$ktp+$kk";
									?>
									<img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?=$dataQR?>&choe=UTF-8" width="300">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group row">
								<div class="col-12">
									<label for="mega-city">Kantor Koperasi</label>
									<input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" value="<?=$pinjamanlist['nama_koperasi']?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<label for="mega-city">Jumlah Peminjaman</label>
									<input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" value="<?=$pinjamanlist['jumlah_dana']?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<label for="mega-city">Metode Pembayaran</label>
									<input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" value="<?php
									if ($pinjamanlist['metode_pembayaran'] == 30){
										echo "1 Bulan";
									}
									elseif ($pinjamanlist['metode_pembayaran'] == 90){
										echo "3 Bulan";
									}
									elseif ($pinjamanlist['metode_pembayaran'] == 180){
										echo "6 Bulan";
									}
									elseif ($pinjamanlist['metode_pembayaran'] == 360){
										echo "12 Bulan";
									}
									else{
										echo "Tidak ada periode pembayaran";
									}
									?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-12">Berkas Persyaratan</label>
							</div>
							<div class="form-group row">
								<label class="col-4 text-primary">Foto Wajah</label>
								<div class="col-4">
									<?php
									if($pinjamanlist['foto_wajah'] == ''){
										?>
										<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
										<?php
									}
									else { ?>
										<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-4 text-primary">KTP</label>
								<div class="col-4">
									<?php
									if($pinjamanlist['foto_ktp'] == ''){
										?>
										<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
										<?php
									}
									else { ?>
										<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-4 text-primary">Kartu Keluarga</label>
								<div class="col-4">
									<?php
									if($pinjamanlist['foto_kartu_keluarga'] == ''){
										?>
										<img src="https://img.icons8.com/ios-filled/26/fa314a/multiply.png"/>
										<?php
									}
									else { ?>
										<img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/26e07f/external-approved-checkmark-symbol-to-verify-the-result-basic-bold-tal-revivo.png"/>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-12">
							<button type="submit" class="btn btn-alt-primary" onclick="window.print()">
								Cetak
							</button>
							<br><br>
							Bukti ini dicetak pada <?php echo date("Y-m-d H:i:s");?>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->

