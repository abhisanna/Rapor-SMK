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
$result = mysqli_query($conn, "SELECT * FROM xrpl2_n");
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
<td colspan=4 align=center>PKN</td>
<td colspan=4 align=center>Bahasa Indonesia</td>
<td colspan=4 align=center>Matematika</td>
<td colspan=4 align=center>Sejarah Indonesia</td>
<td colspan=4 align=center>Bahasa Inggris</td>
<td colspan=4 align=center>Seni Budaya</td>
<td colspan=4 align=center>PJOK</td>
<td colspan=4 align=center>Bahasa Mandarin</td>
<td colspan=4 align=center>Budaya Humanis</td>
<td colspan=4 align=center>Simulasi dan Komunikasi Digital</td>
<td colspan=4 align=center>Fisika</td>
<td colspan=4 align=center>Kimia</td>
<td colspan=4 align=center>Sistem Komputer</td>
<td colspan=4 align=center>Komputer dan Jaringan Dasar</td>
<td colspan=4 align=center>Pemrograman Dasar</td>
<td colspan=4 align=center>Dasar Desain Grafis</td>

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
<td><?php echo $p_mtkk; echo $row ["p_mtkk"]?></td>

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

<!-- seni budaya -->
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

<!-- fisika -->
<td><?php echo $row ["fisikap"]?></td>
<td><?php echo $p_fisikap; echo $row ["p_fisikap"]?></td>
<td><?php echo $row ["fisikak"]?></td>
<td><?php echo $p_fisikak; echo $row ["p_fisikak"]?></td>

<!-- kimia -->
<td><?php echo $row ["kimiap"]?></td>
<td><?php echo $p_kimiap; echo $row ["p_kimiap"]?></td>
<td><?php echo $row ["kimiak"]?></td>
<td><?php echo $p_kimiak; echo $row ["p_kimiak"]?></td>

<!-- sistekom -->
<td><?php echo $row ["sistekomp"]?></td>
<td><?php echo $p_sistekomp; echo $row ["p_sistekomp"]?></td>
<td><?php echo $row ["sistekomk"]?></td>
<td><?php echo $p_sistekomk; echo $row ["p_sistekomk"]?></td>

<!-- komjardas -->
<td><?php echo $row ["komjardasp"]?></td>
<td><?php echo $p_komjardaspp; echo $row ["p_komjardasp"]?></td>
<td><?php echo $row ["komjardask"]?></td>
<td><?php echo $p_komjardaskk; echo $row ["p_komjardask"]?></td>

<!-- progdas -->
<td><?php echo $row ["progdasp"]?></td>
<td><?php echo $p_progdasp; echo $row ["p_progdasp"]?></td>
<td><?php echo $row ["progdask"]?></td>
<td><?php echo $p_progdask; echo $row ["p_progdask"]?></td>

<!-- desgraf -->
<td><?php echo $row ["desgrafp"]?></td>
<td><?php echo $p_desgrafp; echo $row ["p_desgrafp"]?></td>
<td><?php echo $row ["desgrafk"]?></td>
<td><?php echo $p_desgrafk; echo $row ["p_desgrafk"]?></td>

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