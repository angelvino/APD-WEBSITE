<?php
 $con = mysqli_connect('localhost', 'root', '','apd_db');
 $name=$_POST['name'];
 $email=$_POST['email'];
 $pwd=$_POST['password'];


 $sql1 = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pwd')";
 $rs1 = mysqli_query($con, $sql1); 
 if($rs1)
 {
       header("Location: login.html");
       
     }
     else{
        echo "ERROR";
     }
?>