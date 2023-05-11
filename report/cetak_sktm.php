<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['btnCetak'])){
	$id = $_POST['id_pend'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<center>

		<h3>PEMERINTAH KABUPATEN JOMBANG</h3>
		<h3>KECAMATAN PLANDAAN</h3>
			<h2>DESA DARUREJO</h2>
		<P>Jl. Raya Arjuno No : 37 Telp : -  Kode Pos 61456</p>
		<p>________________________________________________________________________</p>

		<?php
			$sql_tampil = "select * from penduduk
			where id_pend ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETERANGAN TIDAK MAMPU</u>
		</h4>
		<p>Nomor :
			<?php echo $data['id_pend']; ?>/Ket.TM/
			<?php echo $tanggal; ?>
		<p>
	</center
	<p>Yang bertandatangan dibawah ini :</P>
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
                <?php
                    if($data['jekel'] == "LK"){
                ?>
                        <td>
                            Laki laki
                        </td>
                <?php
                    }else{
                        ?>
                        <td>
                            Perempuan
                        </td>
                <?php        
                    } 
                ?>
				<td>
				</td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td>:</td>
				<td>
                    <?php echo $data['tempat_lh'];?>/<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
                    Rt. <?php echo $data['rt'];?> Rw. <?php echo $data['rw'];?> Desa Darurejo, Kecamatan Plandaan, Kabupaten Jombang 
				</td>
			</tr>
            <tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>
                    <?php echo $data['pekerjaan'];?>
				</td>
			</tr>
		</tbody>
	</table>
    <?php } ?>
    
	<p>Yang bersangkutan adalah benar warga Desa Darurejo yang berasal dari keluarga tidak mampu</P>
	<p>Demikian surat keterangan ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Darurejo,
		<?php echo $tgl; ?>
		<br>Kepala Desa                 
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>UMAR WAHYUDI
	</p>


	<script>
		window.print();
	</script>

</body>

</html>