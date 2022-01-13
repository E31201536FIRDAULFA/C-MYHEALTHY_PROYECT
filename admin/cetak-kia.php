<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Laporan</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="STYLE1.css">

</head>
<body>
<body id="page-top">
    <table class="user" align="center">
        <h1 class="judul" align="center">- DATA PASIEN POLI KIA/KB -</h1>
        <tr align="center">
            <th>NO.</th>
            <th>NIK</th>
            <th>TANGGAL</th>
            <th>NAMA</th>
            <th>NAMA POLI</th>
        </tr>
 <?php
 include "koneksi.php";
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

$nmr = 1;
        $sql_data = mysqli_query($conn, "SELECT * FROM poli_kia");
        while($data = mysqli_fetch_assoc($sql_data) ) : ?>
        <tr>
            
            <td><?=$data['NO'];?></td>
            <td><?=$data['NIK'];?></td>
            <td><?=$data['TANGGAL'];?></td>
            <td><?=$data['NAMA'];?></td>
            <td><?=$data['NAMA_POLI'];?></td>
            
        </tr>
        <?php $nmr++;?>
        <?php endwhile; ?>

</body>
	<script>
		window.print();
	</script>

</body>
</html>