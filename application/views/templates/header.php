<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman <?= $judul ?></title>
	<link rel="stylesheet" href="<?= asset_url(); ?>css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a href="<?= base_url() ?>" class="navbar-brand">Code Igniter</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
				<a href="<?= base_url() ?>siswa" class="nav-item nav-link">Siswa</a>
				<a href="<?= base_url() ?>people" class="nav-item nav-link">People</a>
				<a href="<?= base_url() ?>about" class="nav-item nav-link">About</a>
			</div>
		</div>
	</div>
</nav>