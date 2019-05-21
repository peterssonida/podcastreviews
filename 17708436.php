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
<body>
<div class="left-widget">
<script>
$(document).ready(function(){
$("#menu1").click(function(){
$(".navbar").load("featured.php");
});
});
$(document).ready(function(){
$("#menu2").click(function(){
$(".content").load("previous.php");
});
});
  </script>
  <div id="menu1">
  <h3>Featured</h3></div>
  <div id="menu2">
  <h3>Previous</h3></div>
</div>

<div class="content">
<h3>Comments will be displayed here</h3>
</div>

<div class="right-widget">
<h3>Profile</h3>
<div class="profile">
  <div id="profile-img">
  </div>
  <div id="profile-info">

  </div>
</div>
</div>
<div class="navbar">
<a class="spreaker-player" href="https://www.spreaker.com/" data-hide-comments="true" data-resource="episode_id=17708436" data-theme="dark" data-autoplay="false" data-playlist="show" data-cover="https://d3wo5wojvuv7l.cloudfront.net/images.spreaker.com/original/edc030252e429c2e36d8eedcd862c968.jpg" data-width="108%" data-height="200px"></a>
</div>

<script async src="https://widget.spreaker.com/widgets.js"></script>

</html>
