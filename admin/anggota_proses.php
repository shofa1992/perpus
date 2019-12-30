<?php
include '../conn/koneksi.php';

$nis = $_POST ['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk	= $_POST['jk'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];


 $input = mysql_query("INSERT into tbl_anggota values('$nis','$nama','$tempat_lahir','$tgl_lahir','$jk','$jurusan','$kelas')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_detil&nis=$nis'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_input'>";
}

?>
