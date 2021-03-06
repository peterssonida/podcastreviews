<?php 
//require detta från dbh.php...
$uname = "dbtrain_1064";
$pass = "utwspc";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_1064";

$conn = new mysqli($host, $uname, $pass, $dbname);

if ($conn->connect_error)
{
	die("Connection failed: ".$conn.connect_error);
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $email = "Invalid email format"; 
}
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$pwdRepeat = mysqli_real_escape_string($conn, $_POST['pwdRepeat']);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//This string tells crypt to use blowfish for 5 rounds. KANSKE TA BORT DETTA?
$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';

// PHP code you need to register a user
// Blowfish accepts these characters for salts.
$Allowed_Chars =
'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
$Chars_Len = 63;

// 18 would be secure as well.
$Salt_Length = 21;

$salt = "";
for($i=0; $i < $Salt_Length; $i++)
{
    $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
}
$bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;
$hashed_password = crypt($pwd, $bcrypt_salt);
if (test_input($uname) === "" || test_input($email) === "" || $email === "Invalid email format" || test_input($pwd) === "" || test_input($pwdRepeat) === "" || $pwd != $pwdRepeat){
    die("Input failed.. ");
}
else{
    $SQLreg = 'INSERT INTO Users (Email, Username, Password, Salt) ' .
    "VALUES ('$email', '$uname','$hashed_password', '$salt')";
}

if ($conn->query($insert) === true){
    echo "Person added";   
}
else{
    echo "Something went wrong: " . $SQLreg . "<br>" . $conn->error;
}

$conn->close();
?>