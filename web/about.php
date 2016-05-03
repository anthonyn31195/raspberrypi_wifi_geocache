
<?php 
include_once(dirname(__file__) . "/lib/header.php");
?>

<div class="w3-row">
    <div class="w3-col s3">
      <center><a href="/"><img src="<?php print image ?>"></a></center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3><?php print cache_name; ?></h3>
    </div>
  </div>

<hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <center><img src="/image/dnsmasq_logo.png" width="96px"></center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Dnsmasq</h3>
    </div>
  </div>
<hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <center><img src="/image/249px-Lighttpd_logo.svg.png" width="66px"></center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Lighttpd</h3>
    </div>
  </div>
<hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <center><img src="/image/raspbian.png" width="96px"></center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Raspbian</h3>
    </div>
  </div>
<hr>

<div class="w3-row">
    <div class="w3-col s3">
      <center><img src="<?php print raspberry_pi_logo ?>" width="56px"><br>Raspbian</center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3><?php print raspberry_pi_name; ?></h3>
    </div>
  </div>
<hr>


  <div class="w3-row">
    <div class="w3-col s3">
      <center><img src="/image/WiFi-hotspot.png" width="66px"></center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Wi-FI</h3>
    </div>
  </div>
<hr>

<?php 
include_once(dirname(__file__) . "/lib/footer.php");
?>

<?php #phpinfo(INFO_VARIABLES); ?>
</body>
</html>