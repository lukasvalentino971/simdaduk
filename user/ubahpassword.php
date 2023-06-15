<div class="row justify-content-center mt-5">
    <div class="col-6">
        <div class="login-box">
            <?php
            if (isset($_SESSION['next'])) {
            ?>
                <div class="card card-outline card-primary">
                    <div class="card-body">
                        <p class="login-box-msg">Masukkan password baru anda</p>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="" name="newPassword">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block" name="simpan">Simpan perubahan</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="card card-outline card-primary">
                    <div class="card-body">
                        <p class="login-box-msg">Masukkan password lama anda</p>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="" name="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block" name="lanjut">Next</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            <?php
            }

            ?>
        </div>
    </div>
</div>

<?php
if (isset($_POST['lanjut'])) {
    $currPass = $_POST['password'];
    $sql_check = "SELECT * FROM pengguna WHERE username = '$data_user' AND password='$currPass'";
    $query = mysqli_query($koneksi, $sql_check);
    $jumlah = mysqli_num_rows($query);
    if ($jumlah == 1) {
        $_SESSION['next'] = "next";
        echo "<script>
        window.location = 'index.php?page=user-ubah-password';
        </script>";
    }
}

if (isset($_POST['simpan'])) {
    $newPass = $_POST['newPassword'];
    $up_pass = "UPDATE pengguna SET password = '$newPass' WHERE username='$data_user'";
    $updateQuerry = mysqli_query($koneksi, $up_pass);
    if ($updateQuerry) {
        unset($_SESSION['next']);
        echo "<script>
			Swal.fire({title: 'Password Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'index.php';}
			})</script>";
    } else {
        echo "<script>
			Swal.fire({title: 'Gagal Ubah Password',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'index.php';}
			})</script>";
    }
}
?>