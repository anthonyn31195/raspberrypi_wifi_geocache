<?php 
include_once(dirname(__file__) . "/etc/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php print cache_name; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/w3.css">
    <link rel="stylesheet" href="/css/w3-theme-green.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </head>
<body>
  <header class="w3-container w3-card-4 w3-theme">
    <h3><?php print cache_name; ?></h3>
  </header>
  <hr>
  <div class="w3-row">
    <div class="w3-col s3">
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Find Code: <?php print find_code; ?></h3>
    </div>
  </div>
  <hr>
  <div class="w3-row">
    <div class="w3-col s3">
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Track me: <?php print tacking_code(); ?></h3>
    </div>
  </div>
  <footer class="w3-container w3-theme">
    <h3><?php print footer ?></h3>
  </footer>
</body>
</html>

