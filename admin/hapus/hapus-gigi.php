<?php 
include "koneksi.php";
$Username = $_GET['Username'];
$sql_hapus = mysqli_query($conn, "DELETE FROM user WHERE Username='$Username'");
if(!$sql_hapus){
	echo"<script>alert('Proses hapus gagal');document.location.href='halaman_admin.php';</script>";
}else {
	echo"<script>alert('Berhasil menghapus data');document.location.href='halaman_admin.php';</script>";
}
?>