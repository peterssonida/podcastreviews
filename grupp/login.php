<?php
//Ta detta från dbLOGIN.php eller vad den nu heter
$uname = "dbtrain_1064";
$pass = "utwspc";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_1064";
$conn = new mysqli($host, $uname, $pass, $dbname);
if ($conn->connect_error)
{
	die("Connection failed: ".$conn.connect_error);
}
$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Verify a user’s password
$get = "SELECT salt, hashed_password FROM User WHERE email='$email'";
$result = mysqli_query($conn,$get);
$row = mysqli_fetch_assoc($result);
$hashed_pass = crypt($pwd, $Blowfish_Pre . $row['salt'] . $Blowfish_End);
if ($hashed_pass == $row['hashed_password']) {
    echo("PASSWORD CORRECT");
    // HÄR LÄGGER VI IN HEADER LOCATION
} else {
    echo("PASSWORD NOT CORRECT");
    // HÄR LÄGGER VI IN HEADER LOCATION
    exit();
}
?>