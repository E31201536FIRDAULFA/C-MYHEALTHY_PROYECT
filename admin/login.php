 <!DOCTYPE html>
<html>
<head>
 <title>LOGIN AKUN</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>
 <br>
 <h1 align="center"> C-Myhealthy</h1>
 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="Username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="Password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">
   <P class="login-register-text">Don't have an account? <a href="registrasi.php">Register Here.</a></P>

   <br/>
   <br/>
   
  </form>
  
 </div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>