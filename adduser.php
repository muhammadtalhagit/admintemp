<?php
include('config.php');
if(isset($_POST['submit'])){

    $_uname = $_POST['name'];
    $_uemail = $_POST['email'];
    $_upass = $_POST['pass'];
    $_uphone = $_POST['phone'];
    
    $password = password_hash($_upass , PASSWORD_BCRYPT);
  
    $query = "INSERT INTO `user registration` (`id`,`name`, `email`, `password`, `phone`) VALUES (NULL , '$_uname', '$_uemail', '$password', '$_uphone')";
     
    $ftc = mysqli_query($connection,$query);
    if(!$ftc){
      die ("Not registered");
    }
    header("location:http://localhost/admin/registeredusers.php");
    
  }
?>