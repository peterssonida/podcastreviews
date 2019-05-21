<!DOCTYPE html>
<html lang="EN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="assets\js\javan.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <title>PodcastFORUM</title>
</head>
<?php
$conn = mysqli_connect('localhost', 'root', 'mysql', 'podcastforum');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql = "SELECT episode_id,show_id,episode_title FROM episodes";


$array = array();
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $array[$row["episode_id"]] = $row["episode_title"];
    }
    foreach ($array as $episode_id => $episode_title) {
        echo  "<a href=$episode_id.php>$episode_title</a><br>";
}}

$conn->close();
?>
</html>
