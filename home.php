<!DOCTYPE html>
<html lang="SV">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcastforum</title>
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
    <h4>Veckans diskussionspodcast är ingen mindre än "Världens tryggaste plats" med Skäringer & Mannheimer. Lyssna, och dela med dig av dina åsikter! Vad är egentligen världens tryggaste plats? Har Anna verkligen rätt?</h4>
  </div>

  <div class="right-widget">
        <img src="https://i.ibb.co/XDZtMjx/podcastforum.png" width="100%">
    <h3>Profile</h3>
    <div class="profile">
      <div id="profile-img">
        <?php
        include 'fetchprofile.php';
        echo "<img src=$image_url>";
         ?>
      </div>
      <div id="profile-info">
        <?php
        include 'fetchprofile.php';
        echo "$fullname";
        ?>
      </div>
    </div>
  </div>
  <div class="navbar">

  </div>

  <script async src="https://widget.spreaker.com/widgets.js"></script>

</body>
</html>
