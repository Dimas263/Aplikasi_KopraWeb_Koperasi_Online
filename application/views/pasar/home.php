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
		<h2 class="content-heading">Product List</h2>
		<div class="row">
			<?php
			$no=1;
			$this->db->select('*');
			$this->db->from('koperasi_product kp');
			$this->db->join('koperasi_user ku', 'ku.id_user=kp.id_user');
			$this->db->order_by('kp.nama_product','asc');
			$project = $this->db->get()->result_array();
			foreach ($project as $productlist) : ?>
				<div class="col-6 col-xl-3">
					<a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
						<div class="block-content block-content-full bg-white d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<img src="<?=base_url('upload/product/')?><?=$productlist['id_user']?>/<?=$productlist['foto']?>" width="300" height="150" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.19);">
							</div>
						</div>
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div>
								<div class="fs-sm fw-semibold text-uppercase text-muted">
									<?=$productlist['nama_product']?> | <span class="text-primary"><?=$productlist['username']?></span>
								</div>
								<div class="fs-3 fw-semibold">
									Rp. <span class="badge badge-primary"><?=$productlist['harga']?></span>
								</div><br>
								<div class="text-muted">
									<?=$productlist['deksripsi']?>
								</div>
							</div>
						</div>
						<br>
					</a>
				</div>
			<?php endforeach ?>
		</div>

	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->

