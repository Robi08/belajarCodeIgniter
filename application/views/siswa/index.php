<div class="container mt-5">
  <?php if($this->session->flashdata('aksi')) : ?>
  	<div class="row">
  		<div class="col-lg-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data siswa <strong>berhasil</strong> <?= $this->session->flashdata('aksi'); ?>
          <button class="close" type="button" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times</span>
          </button>
        </div>
  		</div>
  	</div>
  <?php endif; ?>
  <div class="row mb-3">
    <div class="col-lg-6">
      <a href="<?= base_url() ?>siswa/tambah" class="btn btn-primary tombol-tambah">
        Tambah Data
      </a>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= base_url() ?>siswa/" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari siswa..." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="cari">Cari</button>
          </div>
        </div>  
      </form>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Siswa</h3>
        <?php if(empty($siswa)) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data siswa <strong>tidak ditemukan</strong>
          <button class="close" type="button" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times</span>
          </button>
        </div>
        <?php endif; ?>
				<ul class="list-group">
				<?php foreach ($siswa as $row) : ?>
					<li class="list-group-item">
						<?= $row['nama']; ?>
            <a href="<?= base_url() ?>siswa/hapus/<?= $row['id'] ?>" class="badge badge-danger ml-1 float-right" onclick="return confirm('Yakin?')">Hapus</a>
            <a href="<?= base_url() ?>siswa/ubah/<?= $row['id'] ?>" class="badge badge-success ml-1 float-right tombol-ubah">Ubah</a>
						<a href="<?= base_url() ?>siswa/detail/<?= $row['id'] ?>" class="badge badge-primary ml-1 float-right">Detail</a>
					</li>
				<?php endforeach; ?>
				</ul>
		</div>
	</div>
</div>