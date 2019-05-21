<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="assets\js\javan.js"></script>
    <title>PodcastFORUM</title>
  </head>
<body>
    <?php $csrfrandom = hej123TestAR;
    header("Location: https://www.spreaker.com/oauth2/authorize?client_id=1304&response_type=token&state={$csrfrandom}&scope=basic&redirect_uri=http://localhost/grupp22/registerform.php");
    ?>
</body>
</html>
