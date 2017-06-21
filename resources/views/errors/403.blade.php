<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Error 403 &#8211; <?php echo SITE_TITLE; ?></title>
    <meta name="author" content="Campus Technologies Limited">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_URL; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSET_URL; ?>css/style.css">
</head>
<body>
<section class="error_403">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="number red">403</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="details">
					<h3>You're Not Allowed!</h3>
					<p>
						Sorry! You're currently on the wrong path.<br>
						Try returning to the homepage.
					</p>
					<a href="<?php echo SITE_URL; ?>" class="btn return_btn">Return home</a>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>