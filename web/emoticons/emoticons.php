<?php

define("emoticons_format", "<img src=\"/emoticons/image/%s\">\n");

define("emoji_format","<span class=\"emoji-outer emoji-sizer\"><span class=\"emoji-inner %s\"></span></span>\n");

function emoticons($text)
{
	$icons = array(
 	#':)' => 'X8YPpi6kcyo.png',
 	#':-)' => 'X8YPpi6kcyo.png',
	#':]' => 'X8YPpi6kcyo.png',
	#':D' => 'SOe5wIZyutW.png',
	#':-D' => 'SOe5wIZyutW.png',
	'3:)' => 'bvfMUb1yU5Z.png',
	#':p' => 'viyyiQhRqLr.png',
	#':P' => 'viyyiQhRqLr.png',
	#':-p' => 'viyyiQhRqLr.png',
	#':-P' => 'viyyiQhRqLr.png',
	':(' => 'XVs6rhX0HCD.png',
	':-(' => 'XVs6rhX0HCD.png',
	':[' => 'XVs6rhX0HCD.png',
	':v' => 'FeRtbwVZERQ.png',
	':V' => 'FeRtbwVZERQ.png',
	':/' => 'i-Fg0CS-Xq8.png',
	':\\' => 'i-Fg0CS-Xq8.png',
	'o.O' => 'LEKRsmLFjbd.png',
	'O.o' => 'FtASKJbXQI.png',
	':*' => '8IHydBiR1IR.png',
	':-*' => '8IHydBiR1IR.png',
	'<3' => 'Ob2Er7b1NpV.png',
	'B-)' => 'xU0r2S80RP0.png',
	'8-)' => 'xU0r2S80RP0.png',
	':3' => 'XaD2c4CSAqh.png',
	';)' => 'rk0jOpK8_0P.png',
	':\'(' => 'A-la0dkt8j5.png',
	':o' => '4WPn8J2IZu9.png'
 	);
	
	$emoji_icons = array(
		#'3:)' => 'emoji1f61b',
		':)' => 'emoji263a',
		':-)' => 'emoji263a',
		':]' => 'emoji263a',
		':D' => 'emoji1f62c',
		':-D' => 'emoji1f62c',
		':p' => 'emoji1f61b',
		':P' => 'emoji1f61b',
		':-p' => 'emoji1f61b',
		':-P' => 'emoji1f61b',
		'♡' => 'emoji2665',
		'♤' => 'emoji2660',
		'♧' => 'emoji2663',
		'◇' => 'emoji2666'
	);

	foreach ($icons as $key => &$value ) {
		$value = sprintf(emoticons_format, $value);
	}

	foreach ($emoji_icons as $key => &$value ) {
		$value = sprintf(emoji_format, $value);
	}


	return str_replace(
		array_keys($emoji_icons), 
		$emoji_icons,
		str_replace(
				array_keys($icons), 
				$icons, 
				$text));
}
?>
