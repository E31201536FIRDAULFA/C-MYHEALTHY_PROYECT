
<?php 
include "koneksi.php";
$username_lama = $_GET['edit'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE Username='$username_lama'");
$data = mysqli_fetch_assoc($query);
?>
<form action="" method="POST">
<div class="input div">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="assets/css/style2.css">
 		<link rel="stylesheet" href="STYLE1.css">

<title>C-Myhealthy</title>

</div>
</div>    
</head>
<body id="page-top" class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar h1"><b>EDIT AKUN</a></b>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <span><div class="collapse navbar-collapse" id="navbarNav"></span>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="halaman_admin.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cp.php">TENTANG KAMI</a>
        </li>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-primary" href="logout.php">Log Out</a>
      </div>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
  <main class="flex-shrink-0" >
    <div class="container pt-5">
      <!-- tampilkan pesan selamat datang -->
      <div class="alert alert-light d-flex align-items-center mb-5" role="alert">
        <i class="bi-info-circle text-success me-3 fs-3"></i>
        <div >
          Selamat Datang di <strong>C-Myhealthy</strong>. Anda dapat mengedit data akun user sekarang.
        </div>
      </div>
<table align="center">
	<tr>
		<td><label for="Username">Username</label></td>
		<td><input type="text"name="Username" class="resizedTextbox1" autofocus required value="<?=$data['Username'];?>"></td>
	</tr>
		<tr>
		<td><label for="Password">Password</label></td>
		<td><input type="text"name="Password" class="resizedTextbox1" required value="<?=$data['Password'];?>"></td>
	</tr>
	<tr>
		<td colsplan=3><center><input type="submit" name="update" class="submit submit-hover" value="Update">
		</td>
		<td><a href="halaman_admin.php" class="submit submit-hover">Batal</a></td>
	</tr>
</table>
</div>
</div>
</div>
	<?php
		if (isset($_POST['update']) ){
			include"koneksi.php";
			$username_baru 	= $_POST['Username'];
			$pass	  	= $_POST['Password'];
			
			if ( $username_baru === $username_lama){
				$query_update = mysqli_query($conn, "UPDATE user SET Username='$username_baru', Password='$pass' WHERE Username='$username_lama'");
				if(!$query_update){
					echo"Update gagal";
				}else {
					echo"<script>alert('Data berhasil diupdate');document.location.href='../admin';</script>";
				}
			}else {
				$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE Username='$username_baru'");
				$hitung	  = mysqli_num_rows($cek_username);

			}if($hitung	 > 0){
				echo"<script>alert('Username sudah digunakan');</script>";

			}else {
				$query_update = mysqli_query($conn, "UPDATE user SET Username='$username_baru', Password='$pass' WHERE Username='$username_lama'");
				if(!$query_update){
					echo"Update gagal";
				}else {
					echo"<script>alert('Data berhasil diupdate');document.location.href='halaman_admin.php';</script>";
				}
			}
		}
				?>
				</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				   <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2021 - <a href="" target="_blank" class="text-danger text-decoration-none">clickmyhealthy.com</a>. All rights reserved.
      </div>
    </div>
  </footer>


</html>