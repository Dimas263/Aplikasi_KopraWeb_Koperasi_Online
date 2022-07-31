<!doctype html>
<html lang="en" class="no-focus">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title>KopraWeb</title>

	<meta name="description" content="DimasDekstop - Website &amp; Koperasi Online">
	<meta name="author" content="pixelcave">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph Meta -->
	<meta property="og:title" content="DimasDekstop - Website &amp; Koperasi Online">
	<meta property="og:site_name" content="DimasDekstop">
	<meta property="og:description" content="DimasDekstop - Website &amp; Koperasi Online">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<!-- Icons -->
	<link rel="shortcut icon" href="<?=base_url()?>media/favicons/logo.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=base_url()?>media/favicons/logo.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>media/favicons/logo.png">
	<!-- END Icons -->

	<!-- Stylesheets -->

	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="<?=base_url()?>codebase/js/plugins/sweetalert2/sweetalert2.min.css">

	<!-- Fonts and Codebase framework -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
	<link rel="stylesheet" id="css-main" href="<?=base_url()?>codebase/css/codebase.min.css">
	<!-- END Stylesheets -->
</head>
<body onload="Codebase.loader('show', 'bg-info-light');setTimeout(function () {
	window.location='<?=base_url()?>source/home';
	Codebase.loader('hide', 'bg-info-light');
	}, 12000);">

<div id="page-loader" class="bg-info-light">
	<div class="text-center" style="padding-top: 220px">
		<img class="animated fadeIn" src="https://lun-us.icons8.com/a/9JwozeDu906dhC760SiGQQ/uV3mLPyHrEuk6xiTp0XiTw/Welcome.png" width="220" alt="">
		<h1 class="h1 font-w700">Selamat Datang</h1>
	</div>
</div>

<script src="<?=base_url()?>codebase/js/codebase.core.min.js"></script>
<script src="<?=base_url()?>codebase/js/codebase.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="<?=base_url()?>codebase/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?=base_url()?>codebase/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
<script src="<?=base_url()?>codebase/js/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Page JS Code -->
<script src="<?=base_url()?>codebase/js/pages/be_ui_activity.min.js"></script>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>jQuery(function(){ Codebase.helpers('notify'); });</script>

</body>
</html>
