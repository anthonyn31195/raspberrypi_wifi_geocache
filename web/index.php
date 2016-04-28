<?php

  define('__root__',dirname(__FILE__));
  include_once(__root__."/etc/config.php");
  include_once(__root__."/lib/functions.php");
  #writelog();
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


  <p>Lab Cache Find Code: <?php print find_code; ?>
  <p>Track me at Geocaching.com<br>
  <p>Tacking Code: 
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


  </div>

    <h4><?php print cache_name; ?></h4>

</body>
</html>
