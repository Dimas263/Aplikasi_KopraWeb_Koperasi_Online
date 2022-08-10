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
							<div class="col-md-12">
								<div class="form-group row">
									<div class="col-2">
										<img src="<?=base_url()?>/upload/<?=$username?>/<?=$pinjamanlist['gambar']?>" width="75">
									</div>
									<div class="col-2">
										<label for="mega-firstname">Name</label>
										<input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" value="<?=$pinjamanlist['name']?>">
									</div>
									<div class="col-2">
										<label for="mega-lastname">No. Telp</label>
										<input type="text" class="form-control form-control-lg" id="mega-lastname" name="mega-lastname" value="<?=$pinjamanlist['telp']?>">
									</div>
									<div class="col-2">
										<label for="mega-lastname">Email</label>
										<input type="text" class="form-control form-control-lg" id="mega-username" name="mega-username" value="<?=$pinjamanlist['email']?>">
									</div>
									<div class="col-2">
										<label for="mega-city">Kantor Koperasi</label>
										<input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" value="<?=$pinjamanlist['nama_koperasi']?>">
									</div>
									<div class="col-2">
										<label for="mega-city">Jumlah Peminjaman</label>
										<input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" value="<?=$pinjamanlist['jumlah_dana']?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group row">
									<label class="col-12">
										Metode Pembayaran
										<?php
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
										?>
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="block">
									<div class="block-header block-header-default">
										<h3 class="block-title">Tagihan</h3>
									</div>
									<div class="block-content">
										<table class="table table-vcenter">
											<thead>
											<tr>
												<th>Periode</th>
												<th>Jatuh Tempo</th>
												<th>Status</th>
											</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<?php
														if ($pinjamanlist['metode_pembayaran'] == 30){
															$bayar = $pinjamanlist['jumlah_dana']*0.1;
															for ($x = 1; $x <= 1; $x++) {
																echo "Periode: $x <br>Rp. $bayar<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 90){
															$bayar = $pinjamanlist['jumlah_dana']*0.12;
															for ($x = 1; $x <= 3; $x++) {
																echo "Periode: $x <br>Rp. $bayar<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 180){
															$bayar = $pinjamanlist['jumlah_dana']*0.14;
															for ($x = 1; $x <= 6; $x++) {
																echo "Periode: $x <br>Rp. $bayar<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 360){
															$bayar = $pinjamanlist['jumlah_dana']*0.16;
															for ($x = 1; $x <= 12; $x++) {
																echo "Periode: $x <br>Rp. $bayar<br><br>";
															}
														}
														else{
															echo "Tidak ada periode pembayaran";
														}
														?>
													</td>
													<td class="d-none d-sm-table-cell">
														<?php
														$tgl_peminjaman = $pinjamanlist['tanggal'];

														if ($pinjamanlist['metode_pembayaran'] == 30){
															for ($x = 1; $x <= 1; $x++) {
																$tgl_tagihan = date('Y-m-d', strtotime('+'.$x.' months', strtotime($tgl_peminjaman)));
																echo "Periode: $x <br>$tgl_tagihan<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 90){
															for ($x = 1; $x <= 3; $x++) {
																$tgl_tagihan = date('Y-m-d', strtotime('+'.$x.' months', strtotime($tgl_peminjaman)));
																echo "Periode: $x <br>$tgl_tagihan<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 180){
															for ($x = 1; $x <= 6; $x++) {
																$tgl_tagihan = date('Y-m-d', strtotime('+'.$x.' months', strtotime($tgl_peminjaman)));
																echo "Periode: $x <br>$tgl_tagihan<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 360){
															for ($x = 1; $x <= 12; $x++) {
																$tgl_tagihan = date('Y-m-d', strtotime('+'.$x.' months', strtotime($tgl_peminjaman)));
																echo "Periode: $x <br>$tgl_tagihan<br><br>";
															}
														}
														else{
															echo "Tidak ada periode pembayaran";
														}
														?>
													</td>
													<td>
														<?php
														if ($pinjamanlist['metode_pembayaran'] == 30){
															for ($x = 1; $x <= 1; $x++) {
																echo "Periode: $x <br>Belum Dibayar<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 90){
															for ($x = 1; $x <= 3; $x++) {
																echo "Periode: $x <br>Belum Dibayar<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 180){
															for ($x = 1; $x <= 6; $x++) {
																echo "Periode: $x <br>Belum Dibayar<br><br>";
															}
														}
														elseif ($pinjamanlist['metode_pembayaran'] == 360){
															for ($x = 1; $x <= 12; $x++) {
																echo "Periode: $x <br>Belum Dibayar<br><br>";
															}
														}
														else{
															echo "Tidak ada periode pembayaran";
														}
														?>
													</td>
												</tr>
											</tbody>
										</table>
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

