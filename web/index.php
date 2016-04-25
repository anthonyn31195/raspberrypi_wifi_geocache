<?php

	include_once("config.php");
	include_once("functions.php")
	$data = date('M d, Y');
	if isset($_REQUEST["geocaching_name"] and !empty($vars[1])) {
		writelog($date,$_REQUEST["geocaching_name"]);
	}
?>

<html>
<head>
	<title>Splasher Hacker CacheBerry</title>
</head>
<body>
	<?php print cache_name; ?><br>
	<p>Lab Cache Find Code: <?php print find_code; ?>
	<p>Trackme at Geocaching.com<br>
	<p>Tacking Code: <?php print tracking_code; ?>
	<form action="#" method="post">
		Geocaching name:
		<input type="text" name="geocaching_name" width="30"><br>
		<input type="submit" value="log">
	</form>
	<?php phpinfo(); ?>
</body>
</html>
