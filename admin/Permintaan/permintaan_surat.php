<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Permintaan Surat
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>JENIS SURAT</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    $sql_showData = "SELECT s.id, p.nik, p.nama,  s.jenis_surat, s.status FROM permintaan_surat s
                    INNER JOIN penduduk p ON s.id_penduduk = p.id_pend";
                    $query = mysqli_query($koneksi, $sql_showData);
                    while ($data = $query->fetch_assoc()) {
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
                                <?php echo $data['jenis_surat']; ?>
                            </td>
                            <td class="text-center">
                                <?php
                                if ($data['status'] == "Dalam proses") {
                                ?>
                                    <a href="?page=proses-surat&id=<?= $data['id'] ?>" class="btn btn-primary">Proses</a>
                                <?php
                                } else {
                                ?>
                                    <button class="btn btn-success" disabled>Bisa diambil</button>
                                <?php
                                }
                                ?>
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