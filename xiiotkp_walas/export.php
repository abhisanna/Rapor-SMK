<html>
<head>
</head>
<body>
	<style type="text/css">

	body{
		font-family: sans-serif;
	}

	table{
		margin: 20px auto;
		border-collapse: collapse;
	}

	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}

	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}

	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=rapor.xls");
	?>
 
 <?php
require_once "../koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM xiiotkp_n");
?>
<form name="frmUser" method="post" action="">
<center>
<table border=3 width=100% style="margin-top:-5px">  
<tr>
<td align=center colspan=87>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-52397565, fax. 021-52397573</td>
</tr>
<tr>
<td rowspan=4 width=10%>No</td>
<td rowspan=4>Nama</td>
<td rowspan=4>NISN</td>
<td colspan=52 align=center>Nilai Pelajaran</td>
<td align=center rowspan=4>Nilai</td>
<td align=center rowspan=4>Keterangan</td>

<td colspan=6 align=center rowspan=3>Kegiatan Ekstrakulikule</td>
<td colspan=3 align=center rowspan=3>Ketidak Hadiran</td>

</tr>
<tr>
<td colspan=4 align=center>Agama</td>
<td colspan=4 align=center>PpKN</td>
<td colspan=4 align=center>Bahasa Indonesia</td>
<td colspan=4 align=center>Matematika</td>
<td colspan=4 align=center>Bahasa Inggris</td>
<td colspan=4 align=center>Bahasa Mandarin</td>
<td colspan=4 align=center>Budaya Humanis</td>
<td colspan=4 align=center>Otomatisasi Tata Kelola Kepegawaian</td>
<td colspan=4 align=center>Otomatisasi Tata Kelola Keuangan</td>
<td colspan=4 align=center>Otomatisasi Tata Kelola Sarana dan Prasarana</td>
<td colspan=4 align=center>Otomatisasi Tata Kelola Humas dan Keprotokolan</td>
<td colspan=4 align=center>Produk Kreatif dan Kewirausahaan</td>

</tr>
<tr>
<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

<td>PENGETAHUAN</td>
<td align=center rowspan=2>DESKRIPSI</td>
<td>KETERAMPILAN</td>
<td align=center rowspan=2>DESKRIPSI</td>

</tr>
<tr>

<td width=10px align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td align=center>Nilai</td>
<td align=center>Nilai</td>

<td>Nama Ekskul</td>
<td align=center>Deskripsi</td>

<td>Nama Ekskul</td>
<td align=center>Deskripsi</td>

<td>Nama Ekskul</td>
<td align=center>Deskripsi</td>

<td>Sakit</td>
<td>Izin</td>
<td>Tanpa Keterangan</td>

</tr>
<?php
$i=1;

while($row = mysqli_fetch_array($result)) {
include "predikat.php";
echo"
<tr>
<td>".$i++."</td>"

?>
<td style="text-transform: capitalize;"><?php echo $row ["nama"]?></td>
<td><?php echo $row ["nisn"]?></td>
<!-- agama -->
<td><?php echo $row ["agamap"]?></td>
<td><?php echo $p_agamap; echo $row ["p_agamap"]?></td>
<td><?php echo $row ["agamak"]?></td>
<td><?php echo $p_agamak; echo $row ["p_agamak"]?></td>

<!-- pkn -->
<td><?php echo $row ["ppknp"]?></td>
<td><?php echo $p_ppknp; echo $row ["p_ppknp"]?></td>
<td><?php echo $row ["ppknk"]?></td>
<td><?php echo $p_ppknk; echo $row ["p_ppknk"]?></td>

<!-- bindo -->
<td><?php echo $row ["bindop"]?></td>
<td><?php echo $p_bindop; echo $row ["p_bindop"]?></td>
<td><?php echo $row ["bindok"]?></td>
<td><?php echo $p_bindok; echo $row ["p_bindok"]?></td>

<!-- mtk -->
<td><?php echo $row ["mtkp"]?></td>
<td><?php echo $p_mtkp; echo $row ["p_mtkp"]?></td>
<td><?php echo $row ["mtkk"]?></td>
<td><?php echo $desmtk; echo $row ["p_mtkk"]?></td>

<!-- bing -->
<td><?php echo $row ["bingp"]?></td>
<td><?php echo $p_bingp; echo $row ["p_bingp"]?></td>
<td><?php echo $row ["bingk"]?></td>
<td><?php echo $p_bingk; echo $row ["p_bingk"]?></td>

<!-- mand -->
<td><?php echo $row ["mandp"]?></td>
<td><?php echo $p_mandp; echo $row ["p_mandp"]?></td>
<td><?php echo $row ["mandk"]?></td>
<td><?php echo $p_mandk; echo $row ["p_mandk"]?></td>

<!-- bhum -->
<td><?php echo $row ["bhump"]?></td>
<td><?php echo $p_bhump; echo $row ["p_bhump"]?></td>
<td><?php echo $row ["bhumk"]?></td>
<td><?php echo $p_bhumk; echo $row ["p_bhumk"]?></td>

<!-- kepegawaian -->
<td><?php echo $row ["otkkpgwp"]?></td>
<td><?php echo $p_otkkpgwp; echo $row ["p_otkkpgwp"]?></td>
<td><?php echo $row ["otkkpgwk"]?></td>
<td><?php echo $p_otkkpgwk; echo $row ["p_otkkpgwk"]?></td>

<!-- otkkeu -->
<td><?php echo $row ["otkkeup"]?></td>
<td><?php echo $p_otkkeup; echo $row ["p_otkkeup"]?></td>
<td><?php echo $row ["otkkeuk"]?></td>
<td><?php echo $p_otkkeuk; echo $row ["p_otkkeuk"]?></td>

<!-- otksarpras -->
<td><?php echo $row ["otksarprasp"]?></td>
<td><?php echo $p_otksarprasp; echo $row ["p_otksarprasp"]?></td>
<td><?php echo $row ["otksarprask"]?></td>
<td><?php echo $p_otksarprask; echo $row ["p_otksarprask"]?></td>

<!-- otkhumas -->
<td><?php echo $row ["otkhumasp"]?></td>
<td><?php echo $p_otkhumasp; echo $row ["p_otkhumasp"]?></td>
<td><?php echo $row ["otkhumask"]?></td>
<td><?php echo $p_otkhumask; echo $row ["p_otkhumask"]?></td>

<!-- kwu -->
<td><?php echo $row ["kwup"]?></td>
<td><?php echo $p_kwup; echo $row ["p_kwup"]?></td>
<td><?php echo $row ["kwuk"]?></td>
<td><?php echo $p_kwuk; echo $row ["p_kwuk"]?></td>

<td><?php echo $row ["eskula"]?></td>
<td><?php echo $row ["ket_eskula"]?></td>

<td><?php echo $row ["eskulb"]?></td>
<td><?php echo $row ["ket_eskulb"]?></td>

<td><?php echo $row ["eskulc"]?></td>
<td><?php echo $row ["ket_eskulc"]?></td>

<td><?php echo $row ["sakit"]?></td>
<td><?php echo $row ["izin"]?></td>
<td><?php echo $row ["alfa"]?></td>

</tr>
<?php
}
?>

</table>
</form>
</body>
</html>