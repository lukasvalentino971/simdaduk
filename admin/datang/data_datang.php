<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pendatang
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-datang" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jekel</th>
						<th>Tanggal</th>
						<th>Dusun</th>
						<th>Desa</th>
						<th>RT</th>
						<th>RW</th>
						<th>Kecamatan</th>
						<th>Kabupaten</th>
						<th>Pelapor</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("SELECT d.id_datang, d.nik, d.nama_datang, d.jekel, d.tgl_datang, d.dusun, d.desa, d.rt, d.rw, d.kecamatan, d.kabupaten, p.nama from 
			  datang d inner join penduduk p on d.pelapor=p.id_pend");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nik']; ?>
							</td>
							<td>
								<?php echo $data['nama_datang']; ?>
							</td>
							<td>
								<?php echo $data['jekel']; ?>
							</td>
							<td>
								<?php echo $data['tgl_datang']; ?>
							</td>
							<td>
								<?php echo $data['dusun']; ?>
							</td>
							<td>
								<?php echo $data['desa']; ?>
							</td>
							<td>
								<?php echo $data['rt']; ?>
							</td>
							<td>
								<?php echo $data['rw']; ?>
							</td>
							<td>
								<?php echo $data['kecamatan']; ?>
							</td>
							<td>
								<?php echo $data['kabupaten']; ?>
							</td>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<a href="?page=edit-datang&kode=<?php echo $data['id_datang']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<a href="?page=del-datang&kode=<?php echo $data['id_datang']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
									</>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->