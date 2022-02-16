<?php
 $reason= $_POST['reason'];
 $feedback = $_POST['feedback'];
 //Database connection
 $conn= new mysqli('localhost:3307','root','root@123','cancel');
 if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert into reason (reason,feedback) values(?,?)");
     $stmt->bind_param("ss",$reason,$feedback);
     $stmt->execute();
     header('location: home2.php');
     $stmt->close();
     $conn->close();
 }
?>