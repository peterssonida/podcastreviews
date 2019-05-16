<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcastforum</title>
    <link rel="stylesheet" href="style.css">
    <script src="assets\js\javan.js"></script>
    <title>PodcastFORUM</title>
  </head>
<body>
  <div class="left-widget">
      <div id="menu1">
      <h3>Home</h3></div>
      <div id="menu2">
      <h3>Browse</h3></div>
      <div id="menu3">
      <h3>Recommended</h3></div>
  </div>

  <div class="content">
    <?php
     include ("assets/php/registerform.php"); 
    ?>
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
    <h3><center>Now Playing</center></h3>
  </div>

  <script async src="https://widget.spreaker.com/widgets.js"></script>

</body>
</html>
