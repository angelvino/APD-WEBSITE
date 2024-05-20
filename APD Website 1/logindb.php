<?php
 $con = mysqli_connect('localhost', 'root', '','apd_db');
 $name=$_POST['name'];
 $pwd=$_POST['password'];


 $sql = "select * from users where name = '$name' and password = '$pwd'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){ 
       
        header("Location: user.html");
            
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    } 
?>