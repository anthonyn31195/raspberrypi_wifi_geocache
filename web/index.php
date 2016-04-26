<?php

  include_once("etc/config.php");
  include_once("lib/functions.php");
?>

<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <title><?php print cache_name; ?></title>
</head>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
    <h4><?php print cache_name; ?></h4>
  </div>
  <div data-role="main" class="ui-content">
  <?php writelog(); ?>
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
    <?php #phpinfo(32); ?>
  </div>
  <div data-role="footer">
    <h4><?php print cache_name; ?></h4>
  </div>
  </div>
</body>
</html>
