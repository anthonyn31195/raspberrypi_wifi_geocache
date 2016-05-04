<?php 
include_once(dirname(__file__) . "/../etc/config.php");
include_once(dirname(__file__) . "/functions.php");
include_once(dirname(__file__) . "/../emoji/emoji.php");
include_once(dirname(__file__) . "/../emoticons/emoticons.php");
write_log();
read_log();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php print cache_name; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/w3.css">
    <link rel="stylesheet" href="/css/w3-theme-green.css">
    <!--<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/emoji/emoji.css">
    <!-- <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script> -->

<style>
a, u {
    text-decoration: none;
}
.header_padding {
  position: relative;
  top: 40px;
  bottom: 20px;
  overflow:auto;
}
</style>

<script>
	function w3_open() {
		var x = document.getElementsByClassName("w3-sidenav")[0];
		x.style.display = "block";
	}
	function w3_close() {
		var x = document.getElementsByClassName("w3-sidenav")[0];
		x.style.display = "none";
	}
</script>

  </head>
<body style="max-width:600px">

  <header class="w3-container w3-card-4 w3-theme w3-top">
  	<h3>
  	<i class="w3-opennav fa fa-bars" onclick="w3_open()"></i>
    <a href="/"><?php print cache_name; ?></a>
	</h3>
  </header>

<nav class="w3-sidenav w3-card-2 w3-white" style="width:30%;display:none">
<div class="w3-container w3-theme-d2">
  <span onclick="w3_close()" class="w3-closenav w3-right w3-xlarge">x</span>
  <br>
  <div class="w3-padding w3-center">
    <a href="/"><img class="w3-circle" src="<?php print image ?>" alt="avatar" style="width:75%"></a>
  </div>
</div>
<br>
<a href="/">Home</a>
<a href="<?php print about; ?>">About</a>
<a href="<?php print logs; ?>">Logs</a>				
</nav>

<hr>
</div>


