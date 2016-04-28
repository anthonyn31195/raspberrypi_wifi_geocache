<?php 
include_once(dirname(__file__) . "/etc/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php print cache_name; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=/bootstrap/css/bootstrap.min.css">
    <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </head>
<body>
  <div class="page-header">
    <h1><?php print cache_name; ?></h1>
  </div>
  <div class="container-fluid">
    <div class="well">Find Code: <?php print find_code;?></div>
    <div class="well">
      <form class="form-inline" role="form">
        <div class="form-group">
          <label for="<?php print gname; ?>"><?php print gname_label; ?>:</label>
          <input type="<?php print gname; ?>" class="form-control" id="<?php print gname; ?>">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>

