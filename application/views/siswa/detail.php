<div class="container mt-5">
	<div class="card" style="width: 18rem">
		<div class="card-body">
			<h5 class="card-title"><?= $siswa->nama ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $siswa->nis ?></h6>
			<p class="card-text"><?= $siswa->email ?></p>
			<p class="card-text"><?= $siswa->jurusan ?></p>
			<a href="<?= base_url() ?>siswa" class="card-link">Kembali</a>
		</div>
	</div>
</div>
