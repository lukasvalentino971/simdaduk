<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pindah</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pindah" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Tanggal Pindah</th>
						<th>Alasan</th>
						<th>Dusun</th>
						<th>Desa</th>
						<th>Rt</th>
						<th>Rw</th>
						<th>Kecamatan</th>
						<th>Kabupaten</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT p.id_pend, p.nik, p.nama, d.tgl_pindah, d.alasan, d.dusun, d.rt, d.rw, d.desa, d.kecamatan, d.kabupaten, d.id_pindah from 
			  pindah d inner join penduduk p on p.id_pend=d.id_pdd");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['tgl_pindah']; ?>
						</td>
						<td>
							<?php echo $data['alasan']; ?>
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
							<a href="?page=edit-pindah&kode=<?php echo $data['id_pindah']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pindah&kode=<?php echo $data['id_pend']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
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