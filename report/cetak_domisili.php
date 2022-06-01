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
			<u>SURAT KETARANGAN DOMISILI</u>
		</h4>
		<p>Nomor :
			<?php echo $data['id_pend']; ?>/Ket.Domisili/
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
					UMAR WAHYUDI
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
					Kepala Desa
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					Desa Darurejo, Kecamatan Plandaan, Kabupaten Jombang
				</td>
			</tr>
		</tbody>
	</table>
	<p>Menerangkan bahwa :</p>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>/
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<p>Adalah benar-benar warga Desa Darurejo, Kecamatan Plandaan, Kabupuaten Jombang</P>
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