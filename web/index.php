<?php

  include_once("etc/config.php");
  include_once("lib/functions.php");
  writelog();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php print cache_name; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
</head>
<body>

    <h4><?php print cache_name; ?></h4>


  <p>Lab Cache Find Code: <?php print set_color(find_code,red); ?>
  <p>Track me at Geocaching.com<br>
  <p>Tacking Code: <?php print set_color(tracking_code(),green) . "\n"; ?>
  <p><form action="#" method="post">
    <label for="<?php print constant("gname"); ?>" class="ui-hidden-accessible">Geocaching Nickname:</label>
    <input type="text" name="<?php print constant("gname"); ?>" 
      id="<?php print constant("gname"); ?>"
      placeholder="Geocaching nickname..."
      data-clear-btn="true"><br>
    <input type="text" name="<?php print constant("gcomment"); ?>" 
      id="<?php print constant("gcomment"); ?>"
      placeholder="Comment..."
      data-clear-btn="true"><br>
    <input type="submit" value="Submit Log">
  </form>

    <?php readlog(); ?>
  </div>

    <h4><?php print cache_name; ?></h4>

</body>
</html>
