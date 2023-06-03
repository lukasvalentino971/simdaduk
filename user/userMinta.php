<div class="card" id="dataPermintaan">
    <div class="card-header">
        Data Permintaan Surat
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-primary" id="addData"><i class="fas fa-plus mr-2"></i>Tambah</a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>JENIS SURAT</th>
                <th>STATUS</th>
            </tr>
            <?php
            $sql_showData = "SELECT p.nik, p.nama,  s.jenis_surat, s.status FROM permintaan_surat s
                INNER JOIN penduduk p ON s.id_penduduk = p.id_pend
                WHERE s.id_penduduk = $id_pend";

            $queryData = mysqli_query($koneksi, $sql_showData);
            while ($data = mysqli_fetch_array($queryData)) {
            ?>
                <tr>
                    <td><?php echo $data["nik"]; ?></td>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["jenis_surat"]; ?></td>
                    <td><?php echo $data["status"]; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>

<div class="card" id="formAdd" style="display: none;">
    <form action="" method="post">
        <div class="card-header">
            Data Permintaan Surat
        </div>
        <div class="card-body">
            <h6 style="margin-left: 10px;">NIK : <?php echo $data_user; ?></h6>
            <h6 style="margin-left: 10px;">NAMA : <?php echo $data_nama; ?></h6>
            <div class="mt-4 row">
                <label for="surat" class="col-form-label mx-3">Jenis Surat</label>
                <div class="col-sm-5">
                    <select name="surat" id="surat" class="form-control">
                        <option id="disable" value="1">pilih jenis surat</option>
                        <option class="jenis_surat" value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                        <option class="jenis_surat" value="Surat Keterangan Lahir">Surat Keterangan Lahir</option>
                        <option class="jenis_surat" value="Surat Keterangan Mat">Surat Keterangan Mati</option>
                        <option class="jenis_surat" value="Surat Keterangan Pindah">Surat Keterangan Pindah</option>
                        <option class="jenis_surat" value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer text-center p-4">
            <button type="button" class="btn btn-primary" id="back"><i class="fas fa-arrow-left mr-2"></i>Kembali</button>
            <button type="submit" name="Simpan" class="btn btn-success" id="prosesData" style="display: none;"><i class="fas fa-check mr-2"></i>Proses Permintaan</button>
        </div>
    </form>
</div>

<?php
$date = date('Y-m-d H:i:s');
if (isset($_POST["Simpan"])) {
    $sql_save = "INSERT INTO permintaan_surat (id_penduduk, jenis_surat, tanggal_permintaan, status) VALUES (
        '" . $id_pend . "',
        '" . $_POST["surat"] . "',
        '" . $date . "',
        'Belum')";

    $save = mysqli_query($koneksi, $sql_save);
    mysqli_close($koneksi);
    if ($save) {
        echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=user-minta';
          }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=user-minta';
          }
      })</script>";
    }
}
?>