<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<meta name="description" content="<?= $description ?>" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>static/css/style.css">
</head>
<body>

<!-- HEADER -->
<!-- /HEADER -->

<!-- CONTENT -->
<?php $this->load->view($content); ?>
<!-- /CONTENT -->

<!-- FOOTER -->
<!-- /FOOTER -->

<!-- SCRIPTS -->
</body>
</html>