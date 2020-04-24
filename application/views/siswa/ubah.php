<div class="container">
	<div class="row mt-3">
	  <div class="col-lg-6">
	    <?= form_open() ;?>
	    <input type="hidden" name="id" value="<?= $siswa->id ;?>">
	    <div class="card">
	    	<div class="card-header">
	    		Form Ubah Data Siswa
	    	</div>
	    	<div class="card-body">
	    		<div class="form-group">
			    	<label for="nis">NIS</label>
			    	<input type="text" class="form-control <?= (form_error('nis')) ? 'is-invalid' : '' ?>" value="<?= $siswa->nis ;?>" id="nis" name="nis"  autocomplete="off">
			    	<?= form_error('nis'); ?>
			    </div>
			    <div class="form-group">
			    	<label for="nama">Nama</label>
			    	<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off" value="<?= $siswa->nama ;?>">
			    		<?= form_error("nama"); ?>
			    </div>
			    <div class="form-group">
			    	<label for="email">Email</label>
			    	<input type="text" class="form-control <?= (form_error('email')) ? 'is-invalid' : '' ?>" id="email" name="email"  autocomplete="off" value="<?= $siswa->email ;?>">
			    	<?= form_error('email'); ?>
			    </div>
			    <div class="form-group">
        		<label for="jurusan">Jurusan</label>
        		<select name="jurusan" id="jurusan" class="form-control">
        			<?php foreach ($jurusan as $row) : ?>
        				<?php if($row == $siswa->jurusan) : ?>
									<option value="<?= $row ;?>" selected><?= $row ;?></option>
        				<?php else : ?>
        					<option value="<?= $row ;?>"><?= $row ;?></option>
        				<?php endif; ?>
        			
        			<?php endforeach; ?>
        		</select>
        	</div>
        	<button type="submit" class="btn btn-primary float-right">Simpan</button>
	    	</div>
	    </div>
	  </div>
	</div>
</div>