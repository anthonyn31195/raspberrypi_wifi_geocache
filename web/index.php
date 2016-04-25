<?php

	include_once("config.php");
	include_once("functions.php");
	writelog();
?>

<html>
<head>
	<title>Splasher Hacker CacheBerry</title>
</head>
<body>
	<?php print cache_name; ?><br>
	<p>Lab Cache Find Code: <?php print find_code; ?>
	<p>Trackme at Geocaching.com<br>
	<p>Tacking Code: <?php print tracking_code(); ?>
	<form action="#" method="post">
		Geocaching name:
		<input type="text" name="geocaching_name" width="30"><br>
		<input type="submit" value="log">
	</form>
</body>
</html>
