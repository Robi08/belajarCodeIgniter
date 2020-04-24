<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<h3 class="mt-3">List of People</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($peoples as $people): ?>
					<tr>
						<td><?= ++$start ;?></td>
						<td><?= $people->name ;?></td>
						<td><?= $people->email ;?></td>
						<td>
							<a href="" class="badge badge-danger ml-1" onclick="return confirm('Yakin?')">Hapus</a>
	            <a href="" class="badge badge-success ml-1 tombol-ubah">Ubah</a>
							<a href="" class="badge badge-primary ml-1">Detail</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links() ;?>
		</div>
	</div>
</div>