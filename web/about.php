
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
      <center><img src="/image/dnsmasq_logo.png" width="96px"><br><br>Dnsmasq</center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Dnsmasq</h3>
      Dnsmasq is a Domain Name System (DNS) forwarder and Dynamic Host Configuration Protocol (DHCP) server for small computer networks, created as free software.
    </div>
  </div>
<hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <center><img src="/image/249px-Lighttpd_logo.svg.png" width="66px"></center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Lighttpd</h3>
      Lighttpd (pronounced "lighty") is an open-source web server.
    </div>
  </div>
<hr>

<div class="w3-row">
    <div class="w3-col s3">
      <center><img src="<?php print raspberry_pi_logo ?>" width="56px"><br><br>RaspberryPi</center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3><?php print raspberry_pi_name; ?></h3>
      The Raspberry Pi is a series of credit card–sized single-board computers developed in the United Kingdom by the Raspberry Pi Foundation with the intent to promote the teaching of basic computer science in schools and developing countries.
    </div>
  </div>
<hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <center><img src="/image/raspbian.png" width="96px"><br><br>Raspbian</center>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Raspbian</h3>
      Raspbian is a free operating system based on Debian optimized for the Raspberry Pi hardware. An operating system is the set of basic programs and utilities that make your Raspberry Pi run.
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