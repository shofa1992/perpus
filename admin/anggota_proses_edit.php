<?php
include '../conn/koneksi.php';

$nis = $_POST['nis'];
$nis1 = $_POST ['nis1'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk	= $_POST['jk'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];

 $input = mysql_query("UPDATE tbl_anggota SET nis='$nis1',
 											nama='$nama',
											tempat_lahir='$tempat_lahir',
											tgl_lahir='$tgl_lahir',
											jk='$jk',
											jurusan='$jurusan',
											kelas='$kelas'
											where nis='$nis'
											");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input-anggota'>";
}

?>
