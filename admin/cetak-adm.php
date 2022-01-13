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
        <h1 class="judul" align="center">- DATA USER -</h1>
        <tr align="center">
            
            <th>USERNAME</th>
            <th>PASSWORD</th>
            
        </tr>
 <?php
 include "koneksi.php";
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

$nmr = 1;
        $sql_data = mysqli_query($conn, "SELECT * FROM user");
        while($data = mysqli_fetch_assoc($sql_data) ) : ?>
        <tr>
            
            <td><?=$data['Username'];?></td>
            <td><?=$data['Password'];?></td>
            
        </tr>
        <?php $nmr++;?>
        <?php endwhile; ?>

</body>
	<script>
		window.print();
	</script>

</body>
</html>