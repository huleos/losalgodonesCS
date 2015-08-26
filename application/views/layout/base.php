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

<!-- HEADER -->
<!-- /HEADER -->

<!-- CONTENT -->
<?php $this->load->view($content); ?>
<!-- /CONTENT -->

<!-- FOOTER -->
<footer>
	<p class="copyright">&copy; <?= date('Y'); ?> Los Algodones</p>
</footer>
<!-- /FOOTER -->

<!-- SCRIPTS -->
</body>
</html>