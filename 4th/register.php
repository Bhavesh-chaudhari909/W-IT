<?php

$conn = mysqli_connect("localhost", "username", "password", "database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
  mysqli_query($conn, $sql);
  
  header("Location: login.php");
  exit();
}
?>