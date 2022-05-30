<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_mendu'];
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

		<h2>PEMERINTAH KABUPATEN JOMBANG</h2>
		<h3>KECAMATAN PLANDAAN
			<br>DESA DARUREJO</h3>
		<P>Jl. Raya Arjuno No : 37 Telp : -  Kode Pos 61456</p>
		<p>________________________________________________________________________</p>

		<?php
			$sql_tampil = "select m.id_mendu, m.tgl_mendu, m.sebab, p.nik, p.nama from meninggal_dunia m inner join penduduk p on 
			m.id_pdd=p.id_pend
			where id_mendu ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN KEMATIAN</u>
		</h4>
		<h4>Nomor :
			<?php echo $data['id_mendu']; ?>/Ket.Kematian/
			<?php echo $tanggal; ?>
		</h4>
	</center>
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
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat, tanggal lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<tr>
				<td>Warga Negara</td>
				<td>:</td>
				<td>
					WNI
				</td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>
					<?php echo $data['pekerjaan']; ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $data['agama']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					(belum)
				</td>
			</tr>
			<tr>
				<td>Telah meninggal</td>
				<td>:</td>
			<tr>
				<td>Tanggal Kematian</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_mendu']; ?>
				</td>
			</tr>
			<tr>
				<td>Penyebab kematian</td>
				<td>:</td>
				<td>
					<?php echo $data['sebab']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<!-- bagian ini kurang data Pelapor, tambahin sesuai format surat-->
	<p>Demikian surat keterangan ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Darurejo,
		<?php echo $tgl; ?>
		<br> Kepala Desa
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