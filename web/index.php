<?php 
$tracking_codes = array(
	raspberrypi => "testcode"
	);
$tracking_code = $tracking_codes[php_uname("n")];
$name = "Splasher Hacker CacheBerry";
$find_code = "CACHEBERRY";
?>

<html>
<head>
	<title>Splasher Hacker CacheBerry</title>
</head>
<body>
	<?php print $name; ?><br>
	<p>Lab Cache Find Code: <?php print $find_code; ?>
	<p>Trackme at Geocaching.com<br>
	<p>Tacking Code: <?php print $tracking_code; ?>
	<form action="#" method="post">
		Geocaching name:
		<input type="text" name="geocaching_name" width="30"><br>
		<input type="submit" value="log">
	</form>
	<?php phpinfo(); ?>
</body>
</html>
