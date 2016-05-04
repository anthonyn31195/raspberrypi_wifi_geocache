<?php

function emoticons($text)
{
	$icons = array(
 	':)' => '/emoticons/image/X8YPpi6kcyo.png',
 	':-)' => '/emoticons/image/X8YPpi6kcyo.png',
	':]' => '/emoticons/image/X8YPpi6kcyo.png',
	':D' => '/emoticons/image/SOe5wIZyutW.png',
	':-D' => '/emoticons/image/SOe5wIZyutW.png',
	'3:)' => '/emoticons/image/bvfMUb1yU5Z.png',
	':p' => '/emoticons/image/viyyiQhRqLr.png',
	':P' => '/emoticons/image/viyyiQhRqLr.png',
	':-p' => '/emoticons/image/viyyiQhRqLr.png',
	':-P' => '/emoticons/image/viyyiQhRqLr.png',
	':(' => '/emoticons/image/XVs6rhX0HCD.png',
	':-(' => '/emoticons/image/XVs6rhX0HCD.png',
	':[' => '/emoticons/image/XVs6rhX0HCD.png',
	':v' => '/emoticons/image/FeRtbwVZERQ.png',
	':V' => '/emoticons/image/FeRtbwVZERQ.png',
	':/' => '/emoticons/image/i-Fg0CS-Xq8.png',
	':\\' => '/emoticons/image/i-Fg0CS-Xq8.png',
	'o.O' => '/emoticons/image/LEKRsmLFjbd.png',
	'O.o' => '/emoticons/image/FtASKJbXQI.png',
	':*' => '/emoticons/image/8IHydBiR1IR.png',
	':-*' => '/emoticons/image/8IHydBiR1IR.png',
	'<3' => '/emoticons/image/Ob2Er7b1NpV.png',
	'B-)' => '/emoticons/image/xU0r2S80RP0.png',
	'8-)' => '/emoticons/image/xU0r2S80RP0.png',
	':3' => '/emoticons/image/XaD2c4CSAqh.png',
	';)' => '/emoticons/image/rk0jOpK8_0P.png',
	':\'(' => '/emoticons/image/A-la0dkt8j5.png',
	':o' => '/emoticons/image/4WPn8J2IZu9.png',
 	);

 	$text = ' '.$text.' ';
 	foreach($icons as $search => $replace)
 	{
 		$text = str_replace(' '.$search.' ',' '.'<img src="'.$replace.'">'.' ',$text);
 		$text = str_replace(' '.$search.' ',' '.'<img src="'.$replace.'">'.' ',$text);
 	}
 	return trim($text);
}
?>