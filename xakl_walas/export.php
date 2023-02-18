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
$result = mysqli_query($conn, "SELECT * FROM xakl_n");
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
<td colspan=4 align=center>Sejarah Indonesia</td>
<td colspan=4 align=center>Bahasa Inggris</td>
<td colspan=4 align=center>Seni Budaya</td>
<td colspan=4 align=center>PJOK</td>
<td colspan=4 align=center>Bahasa Mandarin</td>
<td colspan=4 align=center>Budaya Humanis</td>
<td colspan=4 align=center>Simulasi dan Komunikasi Digital</td>
<td colspan=4 align=center>Ekonomi Bisnis</td>
<td colspan=4 align=center>Administrasi Umum</td>
<td colspan=4 align=center>IPA</td>
<td colspan=4 align=center>Etika Profesi</td>
<td colspan=4 align=center>Aplikasi Pengolah Angka/Spreadsheet</td>
<td colspan=4 align=center>Akuntansi Dasar</td>
<td colspan=4 align=center>Perbankan Dasar</td>

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

<!-- sejarah -->
<td><?php echo $row ["sejarahp"]?></td>
<td><?php echo $p_sejarahp; echo $row ["p_sejarahp"]?></td>
<td><?php echo $row ["sejarahk"]?></td>
<td><?php echo $p_sejarahk; echo $row ["p_sejarahk"]?></td>

<!-- bing -->
<td><?php echo $row ["bingp"]?></td>
<td><?php echo $p_bingp; echo $row ["p_bingp"]?></td>
<td><?php echo $row ["bingk"]?></td>
<td><?php echo $p_bingk; echo $row ["p_bingk"]?></td>

<!-- Seni budaya -->
<td><?php echo $row ["sbdp"]?></td>
<td><?php echo $p_sbdp; echo $row ["p_sbdp"]?></td>
<td><?php echo $row ["sbdk"]?></td>
<td><?php echo $p_sbdk; echo $row ["p_sbdk"]?></td>

<!-- or -->
<td><?php echo $row ["pjokp"]?></td>
<td><?php echo $p_pjokp; echo $row ["p_pjokp"]?></td>
<td><?php echo $row ["pjokk"]?></td>
<td><?php echo $p_pjokk; echo $row ["p_pjokk"]?></td>

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

<!-- simkomdig -->
<td><?php echo $row ["simdigp"]?></td>
<td><?php echo $p_simdigp; echo $row ["p_simdigp"]?></td>
<td><?php echo $row ["simdigk"]?></td>
<td><?php echo $p_simdigk; echo $row ["p_simdigk"]?></td>

<!-- ekbis -->
<td><?php echo $row ["ekbisp"]?></td>
<td><?php echo $p_ekbisp; echo $row ["p_ekbisp"]?></td>
<td><?php echo $row ["ekbisk"]?></td>
<td><?php echo $p_ekbisk; echo $row ["p_ekbisk"]?></td>

<!-- adm -->
<td><?php echo $row ["admp"]?></td>
<td><?php echo $p_admp; echo $row ["p_admp"]?></td>
<td><?php echo $row ["admk"]?></td>
<td><?php echo $p_admk; echo $row ["p_admk"]?></td>

<!-- ipa -->
<td><?php echo $row ["ipap"]?></td>
<td><?php echo $p_ipap; echo $row ["p_ipap"]?></td>
<td><?php echo $row ["ipak"]?></td>
<td><?php echo $p_ipak; echo $row ["p_ipak"]?></td>

<!-- etprof -->
<td><?php echo $row ["etprofp"]?></td>
<td><?php echo $p_etprofp; echo $row ["p_etprofp"]?></td>
<td><?php echo $row ["etprofk"]?></td>
<td><?php echo $p_etprofk; echo $row ["p_etprofk"]?></td>

<!-- spread -->
<td><?php echo $row ["spreadp"]?></td>
<td><?php echo $p_spreadp; echo $row ["p_spreadp"]?></td>
<td><?php echo $row ["spreadk"]?></td>
<td><?php echo $p_spreadk; echo $row ["p_spreadk"]?></td>

<!-- akd -->
<td><?php echo $row ["akdp"]?></td>
<td><?php echo $p_akdp; echo $row ["p_akdp"]?></td>
<td><?php echo $row ["akdk"]?></td>
<td><?php echo $p_akdk; echo $row ["p_akdk"]?></td>

<!-- perbankan -->
<td><?php echo $row ["perbankanp"]?></td>
<td><?php echo $p_perbankanp; echo $row ["p_perbankanp"]?></td>
<td><?php echo $row ["perbankank"]?></td>
<td><?php echo $p_perbankank; echo $row ["p_perbankank"]?></td>

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