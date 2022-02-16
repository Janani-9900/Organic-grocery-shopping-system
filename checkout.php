<?php
$firstname = $_POST["firstname"];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip= $_POST['zip'];
$conn= new mysqli('localhost:3307','root','root@123','livinfresh');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else {

        $stmt=$conn->prepare("insert into order_info(firstname,email,address,city,state,zip) values(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$firstname,$email,$address,$city,$state,$zip);
        $stmt->execute();
        header('location: order.php');
        $stmt->close();
        $conn->close();
    }
    
    ?>


    
    
