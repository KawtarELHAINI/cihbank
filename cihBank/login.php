<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cihbank";

$cnx = new mysqli($servername, $username, $password, $dbname);

if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    header("Location:./index.php?error=Invalid");
}

$sql = "SELECT * FROM user where email='$email' and password='$password'";
$result = $cnx->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row['role'] == 1) { // if admin redirect to dashboard
            header("Location:./admin.php");
        } else { // client redirect to home page as client
            header("Location:./home.php");
        }
    }
} else {
    header("Location:./index.php?error=Invalid");
}