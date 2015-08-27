<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<meta name="description" content="<?= $description ?>" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>static/css/style.css">
	<link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>static/img/favicon.png"/>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
</head>
<body>

<section class="element-table">
	<div class="table-cell">
		<div class="container">
			<!-- HEADER -->
			<div class="logo">
				<a href="<?= base_url(); ?>">
					<img src="<?= base_url(); ?>static/img/logo-los-algodones.png" alt="">
				</a>
			</div>
			<!-- /HEADER -->
			<!-- CONTENT -->
			<div class="content">
				<?php $this->load->view($content); ?>
			</div>
			<!-- /CONTENT -->
		</div>
	</div>
</section>

<!-- FOOTER -->
<footer>
	<p class="copyright">&copy; <?= date('Y'); ?> Los Algodones</p>
</footer>
<!-- /FOOTER -->

<!-- SCRIPTS -->
</body>
</html>