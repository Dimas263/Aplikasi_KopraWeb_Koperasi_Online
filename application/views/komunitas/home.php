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
<main id="main-container">
	<div class="content">
		<form action="" method="post">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search.." id="page-header-search-input" name="page-header-search-input">
				<div class="input-group-append">
					<button type="submit" name="search" class="btn btn-secondary">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
		</form>
		<br>
		<div class="row invisible" data-toggle="appear">
			<?php
			$post = $this->input->post(null,TRUE);
			$nama = '';
			if(isset($post['search'])){
				$value = $this->input->post('page-header-search-input', TRUE);
				$this->db->select('*');
				$this->db->from('koperasi_wilayah');
				$this->db->like('nama', $value, 'both');
				$this->db->order_by('nama', 'asc');
				$wilayah = $this->db->get()->result_array();
				foreach ($wilayah as $detail_wilayah):
					?>
					<div class="col-6 col-xl-3">
						<a class="block block-link-shadow text-right" data-toggle="modal" data-target="#modal-fadein<?=$detail_wilayah['nama']?>">
							<div class="block-content block-content-full clearfix">
								<div class="float-left mt-10 d-none d-sm-block">
									<img class="img-avatar" src="https://img.icons8.com/external-flat-02-chattapat-/64/000000/external-community-social-media-flat-02-chattapat-.png" alt="">
								</div>
								<div class="font-size-sm font-w600"><?=$detail_wilayah['nama']?></div>
							</div>
						</a>
					</div>
				<?php
				endforeach;
			}
			else{
				$this->db->select('*');
				$this->db->from('koperasi_wilayah');
				$this->db->where('LENGTH(kode)', 8);
				$this->db->order_by('RAND()');
				$wilayah = $this->db->get()->result_array();
				foreach ($wilayah as $detail_wilayah):
					?>
					<div class="col-6 col-xl-3">
						<a class="block block-link-shadow text-right" data-toggle="modal" data-target="#modal-fadein<?=$detail_wilayah['nama']?>">
							<div class="block-content block-content-full clearfix">
								<div class="float-left mt-10 d-none d-sm-block">
									<img class="img-avatar" src="https://img.icons8.com/external-flat-02-chattapat-/64/000000/external-community-social-media-flat-02-chattapat-.png" alt="">
								</div>
								<div class="font-size-sm font-w600"><?=$detail_wilayah['nama']?></div>
							</div>
						</a>
					</div>
				<?php endforeach;
			}
			?>
		</div>
	</div>
</main>

<?php
if(isset($post['search'])){
	include_once 'model_search.php';
}
else{
	include_once 'model_default.php';
}
?>
