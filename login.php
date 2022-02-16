<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
//Database connection
$conn= new mysqli('localhost:3307','root','root@123','sign_up');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into signup(username,password,email) values(?,?,?)");
    $stmt->bind_param("sss",$username,$password,$email);
    $stmt->execute();
    header('location: loginindex.php');
    $stmt->close();
    $conn->close();
}

?>
