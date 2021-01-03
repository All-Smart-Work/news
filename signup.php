<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['signup'])){

   $first_name = $_POST['register-firstname'];
   $last_name = $_POST['register-lastname'];
   $email = $_POST['register-email'];
  $password = $_POST['register-password'];

 $token = md5($email);
 
 $encode_password = md5($password);

$query = "INSERT INTO `users`(`name`, `lastname`, `email`, `password`, `token`) VALUES ('$first_name', '$last_name', '$email', '$encode_password', '$token')";
$result = mysqli_query($conn, $query);
if($result){
    header("Location: login_full.html");
}



}



?>