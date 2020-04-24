<div class="container">
	<div class="row mt-3">
	  <div class="col-lg-6">
	    <?= form_open() ;?>
	    <div class="card">
	    	<div class="card-header">
	    		Form Tambah Data Siswa
	    	</div>
	    	<div class="card-body">
	    		<div class="form-group">
			    	<label for="nis">NIS</label>
			    	<input type="text" class="form-control <?= (form_error('nis')) ? 'is-invalid' : '' ?>" id="nis" name="nis"  autocomplete="off">
			    	<?= form_error('nis'); ?>
			    </div>
			    <div class="form-group">
			    	<label for="nama">Nama</label>
			    	<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off">
			    		<?= form_error("nama"); ?>
			    </div>
			    <div class="form-group">
			    	<label for="email">Email</label>
			    	<input type="text" class="form-control <?= (form_error('email')) ? 'is-invalid' : '' ?>" id="email" name="email"  autocomplete="off">
			    	<?= form_error('email'); ?>
			    </div>
			    <div class="form-group">
        		<label for="jurusan">Jurusan</label>
        		<select name="jurusan" id="jurusan" class="form-control">
        			<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        			<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
        			<option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
        			<option value="Akuntansi">Akuntansi</option>
        			<option value="Pemasaran">Pemasaran</option>
        		</select>
        	</div>
        	<button type="submit" class="btn btn-primary float-right">Simpan</button>
	    	</div>
	    </div>
	  </div>
	</div>
</div>