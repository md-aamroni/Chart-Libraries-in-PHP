<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Chart Library, Morris Chart">
	<meta name="description" content="Chart Libraries in PHP">
	<meta name="author" content="Md. Abdullah Al Mamun Roni">
	<link rel="shortcut icon" type="image/png" href="<?php echo asset('images/chart.svg'); ?>" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="<?php echo asset('css/app.css'); ?>" rel="stylesheet" />
	<title><?php echo ucwords(str_replace('-', ' ', $_ENV['APP_NAME'])); ?></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	<main>
		<?php if (basename($_SERVER['PHP_SELF']) !== 'index.php') : ?>
		<div class="container my-2">
			<div class="row">
				<div class="col-12">
					<div class="text-end my-2">
						<a href="index" class="btn btn-outline-primary btn-sm"><i class="fas fa-laptop-house"></i> Go Back To Home</a>
						<a href="javascript:window.history.go(-1);" class="btn btn-outline-secondary btn-sm"><i class="fas fa-undo-alt"></i> Back To Last Page</a>
					</div>
				</div>
		<?php endif; ?>
