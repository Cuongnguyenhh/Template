<?php
session_start();
$user = $_SESSION['username'];
include './connect.php';
$conn = connectdb();
$old_pass =MD5($_POST['old_pass']);
$new_pass =MD5($_POST['new_pass']);
$re_pass =$_POST['re_pass'];
$stmt = $conn->prepare("SELECT , pass, FROM user WHERE email=".$user);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
echo $kq;
?>