<?php 
  $con = mysqli_connect('localhost', 'root', '','apd_db');
  $fn=$_POST['firstname'];
  $ln=$_POST['lastname'];
  $email=$_POST['email'];
  $pwd=$_POST['Password'];
  $cpwd=$_POST['confirm_Password'];


  $sql1 = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `Password`) VALUES ('$fn', '$ln', '$email', '$pwd')";
  $rs1 = mysqli_query($con, $sql1); 
  if($rs1)
  {
      $sql = "SELECT * from `users` where `email` = '$email' and `Password` = '$pwd'";  
      $res = mysqli_query($con, $sql);
      if($res){
        //echo "---";
        //$rws = mysqli_fetch_assoc($res);
        //$login = $rws['login_id'];

        header("Location: user.html");
              //echo "Location: js.php?id=".$login;
        
      }
  }
?>