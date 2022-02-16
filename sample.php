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
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
$email=$_POST['email'];
//Database connection
$conn= new mysqli('localhost:3307','root','root@123','sign_up');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into signup(username,password,repeatpassword,email) values(?,?,?,?)");
    $stmt->bind_param("ssss",$username,$password,$repeatpassword,$email);
    $stmt->execute();
    header('location: loginindex.php');
    $stmt->close();
    $conn->close();
}

?>
