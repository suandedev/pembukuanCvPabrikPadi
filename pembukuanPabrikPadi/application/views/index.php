
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pembukuan</h1>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<div class="row">
		<div class="col-lg-6">
			<div class="p-3 border mb-3 mt-3">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Catatan Kerja</h1>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
				</div>
				<form class="user" action="<?= base_url('home/tambah_catatan_harian') ?>" method="post">
					<label for="hasil_pekerjaan"><h5>Hasil Pekerjaan</h5></label>
					<div class="form-group">
						<input type="number" name="hasil_perkerjaan" class="form-control form-control-user"
							   id="hasil_pekerjaan" placeholder="berapan ton?">
					</div>

					<label class="form-label"  for="kategori"><h5>Kategori</h5></label>
					<div class="form-group">
						<input type="text" name="kategori" class="form-control form-control-user"
							   id="kategori" placeholder="kategori">
					</div>

					<label class="form-label"  for="karyawan"><h5>Karyawan</h5></label>
					<div class="form-group">
						<input type="text" name="karyawan" class="form-control form-control-user"
							   id="karyawan" placeholder="karyawan">
					</div>

					<button type="submit"  class="btn btn-primary btn-user btn-block mt-3">
						SIMPAN
					</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Basic Card Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">pembukuan harian</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Hasil_pekerjaan</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Kategori</th>
							<th scope="col">Karyawan</th>
							<th scope="col">aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php $no = 1; ?>
						<?php foreach ($pembukuan_harian as $d) : ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $d['hasil_pekerjaan'] ?> Ton</td>
							<td><?= $d['tanggal'] ?></td>
							<td><?= $d['kategori'] ?></td>
							<td><?= $d['karyawan'] ?></td>
							<td>
								<a class="btn btn-warning btn-sm" href="<?= base_url('Home/edit_catatan_harian/' . $d['id_pembukuan_harian']) ?>" onclick=" confirm('yakin diubah?')"><i class="fas fa-edit"></i>edit</a> |
								<a class="btn btn-danger btn-sm" href="<?= base_url('Home/hapus_catatan_harian/' . $d['id_pembukuan_harian']) ?>" onclick=" confirm('yakin?')"><i class="fas fa-trash"></i>hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
