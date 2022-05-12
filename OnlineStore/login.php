<?php
session_start();
include "scripts/connectToDatabase.php";

$email = $_POST['email'];
$password =  $_POST['password'];

if (empty($email)) {
    header(" Location: index.php?erro=User Name is required");
    exit();
}
else if (empty($password)) {
    header(" Location: index.php?erro=Password is required");
    exit();
}

$sql = "SELECT * FROM User WHERE email= '$email' AND password ='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['email'] === $email && $row['password'] = $password){
        echo "Logged In!";
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_name'] = $row['username'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }else {
        header("Location: index.php?error=Incorrect User Name or Passowrd");
        exit();
    }
}else {
    header("Location: index.php");
    exit();
}
