<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Pembukuan Harian</h1>

	<div class="row">
		<div class="col-lg-6">
			<!-- Basic Card Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Pembukuan Tanggal <?= $harian['tanggal'] ?></h6>
				</div>
				<div class="card-body">
						<ul class="list-group list-group-flush">
							<form class="user" action="<?= base_url('home/aski_edit_catatan_harian') ?>" method="post">
								<input type="hidden" name="id" value="<?= $harian['id_pembukuan_harian'] ?>">
								<label for="hasil_pekerjaan"><h5>Hasil Pekerjaan</h5></label>
								<div class="form-group">
									<input type="number" name="hasil_perkerjaan" class="form-control form-control-user"
										   id="hasil_pekerjaan" placeholder="berapan ton?"  value="<?= $harian['hasil_pekerjaan'] ?>">
								</div>
								<label for="hasil_pekerjaan"><h5>Kategori</h5></label>
								<div class="form-group">
									<input type="text" name="kategori" class="form-control form-control-user"
										   id="hasil_pekerjaan" placeholder="kateri"  value="<?= $harian['kategori'] ?>">
								</div>

								<label class="form-label"  for="karyawan"><h5>Karyawan</h5></label>
								<div class="form-group">
									<input type="text" name="karyawan" class="form-control form-control-user"
										   id="karyawan" placeholder="karyawan" value="<?= $harian['karyawan'] ?>">
								</div>

									<button type="submit" class="btn btn-primary">SIMPAN</button>
									<a href="<?= base_url('home') ?>" class="btn btn-secondary">batal</a>
							</form>
						</ul>
				</div>
			</div>
		</div>
	</div>
</div>
