
<?php 
include_once(dirname(__file__) . "/lib/header.php");
?>


  <div class="w3-row">
    <div class="w3-col s3">
      <img src="<?php print raspberry_pi_logo ?>" width="66px">
    </div>
    <div class="w3-col s9 w3-container">
      <h3><?php print raspberry_pi_name; ?></h3>
    </div>
  </div>
<hr>
<?php 
include_once(dirname(__file__) . "/lib/footer.php");
?>

<?php #phpinfo(INFO_VARIABLES); ?>
</body>
</html>