
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Totalan</h1>

	<div class="row">
		<div class="col-lg-6">
			<div class="p-3 border shadow mb-3 mt-3">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Totalan kerja</h1>
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<?php foreach ($totalan as $tl) : ?>
						<?php $data[] = $tl['hasil_pekerjaan']?>
					<?php endforeach; ?>
					<h1><p class="fw-bold"><?= array_sum($data) ?> TON</p></h1>
				</div>
			</div>
		</div>
	</div>

	<!-- Basic Card Example -->
	<div class="card shadow mb-4 mt-3">
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
					</tr>
					</thead>
					<tbody>

					<?php $no = 1; ?>
					<?php foreach ($totalan as $tl) : ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $tl['hasil_pekerjaan'] ?> Ton</td>
							<td><?= $tl['tanggal'] ?></td>
							<td><?= $tl['kategori'] ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
