
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pembukuan</h1>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<div class="row">
		<div class="col-lg-6 d-none "></div>
		<div class="col-lg-6">
			<div class="p-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Catatan Kerja</h1>
				</div>
				<form class="user" action="home" method="post">
					<label for="hasil_pekerjaan"><h5>Hasil Pekerjaan</h5></label>
					<div class="form-group">
						<input type="number" name="hasil_perkerjaan" class="form-control form-control-user"
							   id="hasil_pekerjaan" placeholder="berapan ton?">
					</div>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">

					<label for="tanggal"><h5>Tanggal</h5></label>
					<div class="form-group">
						<input type="date" name="tanggal" class="form-control form-control-user"
							   id="tanggal" placeholder="tanggal">
					</div>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">

					<label for="kategori"><h5>Kategori</h5></label>
					<div class="form-group">
						<input type="text" name="kategori" class="form-control form-control-user"
							   id="kategori" placeholder="kategori">
					</div>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">

					<button type="submit"  class="btn btn-primary btn-user btn-block">
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
							<td>
								<a class="btn btn-warning btn-sm" href="<?= base_url('Home/' . $d['id_pembukuan_harian']) ?>"><i class="fas fa-eye"></i>edit</a> |
								<a class="btn btn-danger btn-sm" href="<?= base_url('Home/index_delete/' . $d['id_pembukuan_harian']) ?>" onclick="return confirm('yakin?')"><i class="fas fa-trash"></i>hapus</a>
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
