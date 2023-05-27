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
        </table>
    </div>
</div>

<div class="card" id="formAdd" style="display: none;">
    <form action="" method="post">
        <div class="card-header">
            Data Permintaan Surat
        </div>
        <div class="card-body">
            <h6 style="margin-left: 10px;">NIK : 186212912</h6>
            <h6 style="margin-left: 10px;">NAMA : Achmad Aly</h6>
            <div class="mt-4 row">
                <label for="surat" class="col-form-label mx-3">Jenis Surat</label>
                <div class="col-sm-5">
                    <select name="surat" id="surat" class="form-control">
                        <option id="disable" value="1">pilih jenis surat</option>
                        <option class="jenis_surat" value="">Surat Keterangan Domisili</option>
                        <option class="jenis_surat" value="">Surat Keterangan Lahir</option>
                        <option class="jenis_surat" value="">Surat Keterangan Mati</option>
                        <option class="jenis_surat" value="">Surat Keterangan Pindah</option>
                        <option class="jenis_surat" value="">Surat Keterangan Tidak Mampu</option>
                        <option class="jenis_surat" value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer text-center p-4">
            <button type="button" class="btn btn-primary" id="back"><i class="fas fa-arrow-left mr-2"></i>Kembali</button>
            <button type="submit" class="btn btn-success" id="prosesData" style="display: none;"><i class="fas fa-check mr-2"></i>Proses Permintaan</button>
        </div>
    </form>
</div>