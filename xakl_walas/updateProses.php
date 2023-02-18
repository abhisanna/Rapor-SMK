<?php
include('../koneksi.php');
error_reporting(0);
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['datanilai']['name']) && in_array($_FILES['datanilai']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['datanilai']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['datanilai']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        $id = $sheetData[$i]['0'];
        $eskula = $sheetData[$i]['1'];
        $ket_eskula = $sheetData[$i]['2'];
        $eskulb = $sheetData[$i]['3'];
        $ket_eskulb = $sheetData[$i]['4'];
        $eskulc = $sheetData[$i]['5'];
        $ket_eskulc = $sheetData[$i]['6'];
        $eskuld = $sheetData[$i]['7'];
        $ket_eskuld = $sheetData[$i]['8'];
        $sakit = $sheetData[$i]['9'];
        $izin = $sheetData[$i]['10'];
        $alfa = $sheetData[$i]['11'];

        $sql = "UPDATE xakl_n SET 
        eskula='$eskula',ket_eskula='$ket_eskula',eskulb='$eskulb',ket_eskulb='$ket_eskulb',
        eskulc='$eskulc',ket_eskulc='$ket_eskulc',eskuld='$eskuld',ket_eskuld='$ket_eskuld',
        sikap='$sikap',izin='$izin',alfa='$alfa'
        WHERE id=$id";
        mysqli_query($conn,$sql);
    }
    header("Location: index.php"); 
}
?>