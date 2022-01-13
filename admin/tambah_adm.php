
<form action="" method="POST">
<div class="input div">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="STYLE1.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    <title>C-Myhealthy</title>
      </div>
    </div>
</head>
<body id="page-top" class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar h1"><b>ISI DATA ANTREAN</a></b>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <span><div class="collapse navbar-collapse" id="navbarNav"></span>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="db_petugas.php">HOME</a>
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
  <main class="flex-shrink-0" >
    <div class="container pt-5">
      <!-- tampilkan pesan selamat datang -->
      <div class="alert alert-light d-flex align-items-center mb-5" role="alert">
        <i class="bi-info-circle text-success me-3 fs-3"></i>
        <div >
          Selamat Datang di <strong>C-Myhealthy</strong>. Anda dapat menambah data akun user sekarang.
        </div>
      </div>
	<table align="center">
	 <br>
		<tr>
		<td ><label for="username">Username</label></td>
		<td ><input type="text" name="username" class="resizedTextbox1" autofocus required></td>
	</tr>
	<tr >
		
		<td><label for="password">Password</label></td>
		<td><input type="password" name="password" class="resizedTextbox1" required ></td>
		</tr>
		<td >
			<center><input type="submit" name="simpan" class="submit submit-hover" value=Simpan>
			</td>
			<td><a href="halaman_admin.php" class="submit submit-hover">Batal</a></td>
	</table>

</div>
	<?php
		if (isset($_POST['simpan'])){
			include"koneksi.php";
			//echo"Tombol login terclick";
			$username 	= $_POST['username'];
			$password	  = $_POST['password'];
						
			$cek_username = mysqli_query($conn, "SELECT * FROM user WHERE Username='$username'");
			$row	  = mysqli_num_rows($cek_username);
						
			if($row > 0){
				echo "<script>alert('Username tersebut sudah digunakan');</script>";
			}else {
				$query_simpan = mysqli_query($conn, "INSERT INTO user(Username, Password) VALUES('$username', '$password')");
				if(!$query_simpan){
					echo"Proses penyimpanan gagal";
				}else {
					echo "<script>alert('Data berhasil disimpan');document.location.href='halaman_admin.php';</script>";
				}
			}
		}
				?>
</form>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>