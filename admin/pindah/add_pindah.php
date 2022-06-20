<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="id_pdd" id="id_pdd" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Penduduk -</option>
						<?php
				// ambil data dari database
				$query = "select * from penduduk where status='Ada'";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_pend'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama'] ?>
						</option>
						<?php
				}
				?>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Pindah</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_pindah" name="tgl_pindah" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Pindah" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat Pindah</label>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="rt" name="rt" placeholder="rt" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RW</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="rw" name="rw" placeholder="RW" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="desa" name="desa" placeholder="Desa" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="kabupaten" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pindah" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO pindah (id_pdd, tgl_pindah, alasan, dusun, rt, rw, desa, kecamatan, kabupaten) VALUES (
			'".$_POST['id_pdd']."',
            '".$_POST['tgl_pindah']."',
			'".$_POST['alasan']."',
            '".$_POST['dusun']."',
			'".$_POST['rt']."',
            '".$_POST['rw']."',
			'".$_POST['desa']."',
            '".$_POST['kecamatan']."',
            '".$_POST['kabupaten']."')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);
		
		$sql_ubah = "UPDATE penduduk SET 
			status='Pindah'
			WHERE id_pend='".$_POST['id_pdd']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
        mysqli_close($koneksi);

    if ($query_simpan && $query_ubah) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pindah';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pindah';
          }
      })</script>";
    }}
     //selesai proses simpan data
