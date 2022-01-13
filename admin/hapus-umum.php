<?php 
include "koneksi.php";
$nik = $_GET['NIK'];
$sql_hapus = mysqli_query($conn, "DELETE FROM poli_umu WHERE NIK='$nik'");
if(!$sql_hapus){
	echo"<script>alert('Proses Hapus Gagal');document.location.href='poli_umum.php';</script>";
}else {
	echo"<script>alert('Berhasil Menghapus Data');document.location.href='poli_umum.php';</script>";
}
?>