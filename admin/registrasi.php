<?php

// menghubungkan php dengan koneksi database
include 'koneksi.php';

error_reporting(0);

 if(isset($_POST['submit'])){
    $Username = mysqli_real_escape_string($conn, trim($_POST['Username']));
    $Password = mysqli_real_escape_string($conn, trim($_POST['Password']));
    $CPassword = mysqli_real_escape_string($conn, trim($_POST['CPassword']));
    $level = mysqli_real_escape_string($conn, trim($_POST['level']));

  if($Password != $CPassword){
    header('location: index.php?konfirmasipassword-field');

    }else{

      try {
        $sql='insert into user(Username, Password, level) values("'.$Username.'", "'.$Password.'", "'.$level.'")';
          mysqli_query($conn, $sql);
          header('location: login.php');
          echo "<script>alert('Berhasil Register')</script>";
      } catch (Exception $e) {
        print_r($e->getMessage());
      }
          
        
    }
  }


 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRASI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

 <div class="panel_login">
  <p class="tulisan_atas">Registrasi</p>

  <form action="" method="post">
   <label>Username</label>
   <input type="text" name="Username" class="form_login" placeholder="Username" value="<?php echo $Username; ?>" required="required">

   <label>Password</label>
   <input type="password" name="Password" class="form_login" placeholder="Password" value="<?php echo $_POST['Password']; ?>"required="required">

    <label>Confirm Password</label>
   <input type="password" name="CPassword" class="form_login" placeholder="Confirm Password" value="<?php echo $_POST['CPassword']; ?>"required="required">

   <label>level</label>
   <input type="text" name="level" class="form_login" placeholder="level"value="<?php echo $level; ?>" required="required">

   <input name="submit" type="submit" class="tombol_login" value="REGISTER">

   <P class="login-register-text">Have an account? <a href="index.php">Login Here.</a></P>

   <br/>
   <br/>
   
  </form>
  
 </div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>