<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_pindah'];
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

			$sql_tampil = "select d.id_pindah, d.tgl_pindah, d.alasan, d.dusun, d.rt, d.rw, d.desa, d.kecamatan, d.kabupaten, p.nik, p.nama, p.tempat_lh, p.tgl_lh from pindah d inner join penduduk p on 
			d.id_pdd=p.id_pend
			where id_pindah ='$id'";
				
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN PINDAH</u>
		</h4>
		<p>Nomor :
			<?php echo $data['id_pindah']; ?>/Ket.Pindah/
			<?php echo $tanggal; ?>
		<p>
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
			
		</tbody>
	</table>
	<p>Adalah benar penduduk Desa Darurejo, Kecamatan Plandaan, Kabupuaten Jombang karena atas permintaan sendiri kepadanya Surat Keterangan Pindah 
		ke Dusun <?php echo $data['dusun']; ?>, RT <?php echo $data['rt']; ?>, RW <?php echo $data['rw']; ?>, Desa <?php echo $data['desa']; ?>, 
		Kecamatan <?php echo $data['kecamatan']; ?>, Kabupaten <?php echo $data['kabupaten']; ?> dengan alasan <?php echo $data['alasan']; ?>
	</P>
	<?php } ?>
	<p>Demikian surat keterangan ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya.</P>
	<br>
	<br>
	<p>
		<div align="right">
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
		</div>
		
	</p>


	<script>
		window.print();
	</script>

</body>

</html>