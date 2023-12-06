<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "labour";
 $add=$_GET['id'];
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql="delete from labour where address='$add'";
 echo $add;
 if($conn->query($sql)){
    echo "successfully deleted";
    header("Location: Farmer_home.php");
 }
 else{

 }
?>