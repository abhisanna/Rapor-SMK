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
        $bingp = $sheetData[$i]['1'];
        $bingk = $sheetData[$i]['2'];

        $sql = "UPDATE xotkp_n SET 
        bingp='$bingp',bingk='$bingk'
        WHERE id=$id";
        mysqli_query($conn,$sql);
    }
    header("Location: index.php"); 
}
?>