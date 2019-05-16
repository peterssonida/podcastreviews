<?php
$uname = "dbtrain_1064";
$pass = "utwspc";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_1064";

$conn = new mysqli($host, $uname, $pass, $dbname);

if ($conn->connect_error)
{
	die("Connection failed: ".$conn.connect_error);
}

//This string tells crypt to use blowfish for 5 rounds.
$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['pwd']);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Now to verify a user’s password
$get = "SELECT Password, Salt FROM Users WHERE Email='$email'";
$result = mysqli_query($conn,$get);
$row = mysqli_fetch_assoc($result);
$hashed_pass = crypt($password, $Blowfish_Pre . $row['Salt'] . $Blowfish_End);
if ($hashed_pass == $row['Password']) {
    echo 'Password verified!';
    echo $hashed_pass;
} else {
    echo 'There was a problem with your user name or password.';
}


?>