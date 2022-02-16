<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 //Database connection
 $conn= new mysqli('localhost:3307','root','root@123','login_page');
 if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert into login(username,password) values(?,?)");
     $stmt->bind_param("ss",$username,$password);
     $stmt->execute();
     $_SESSION['username']=$username;
     header('location: home2.php');
     $stmt->close();
     $conn->close();
 }
?>