<?php
include './connect.php';
$conn = connectdb();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "INSERT INTO user  (name,pass, email, create_time)
  VALUES ( $name, MD5('$pass'), $email)";
  // use exec() because no results are returned
  $conn->exec($sql);

  header('Location: http://localhost/Templete/view/login.php');
  // DOne
?>