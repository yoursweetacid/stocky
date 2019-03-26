<?php
	$charset = "1234567890abcdefghijklmnopqrstuvwxyz";
	$length = mt_rand(4, 7);

	
	$font = dirname(__FILE__) . '/fonts/calibri.ttf';
	$fontsize = 40;

	$width = 260;
	$height = 100;

	header("Content-type: image/png");
	$img = imagecreatetruecolor($width, $height);
	imagesavealpha($img, true);
	$background = imagecolorallocatealpha($img, 0, 0, 0, 127);
	imagefill($img, 0, 0, $background);

	$background_no = mt_rand(1, 3);
	$img = imagecreatefrompng("images/background/captcha$background_no.png");

	$captcha = "";
	for ($i = 0; $i < $length; $i++)
	{
		$captcha .= $charset[mt_rand(0, strlen($charset) - 1)];
		$x = ($width - 20) / $length * $i + 10;
		$x = mt_rand($x, $x + 10);
		$y = $height - (($height - $fontsize) / 2);
		$charcolor = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
		$angle = mt_rand(-25, 25);
		imagettftext($img, $fontsize, $angle, $x, $y, $charcolor, $font, $captcha[$i]);
	}

	$n_lines = mt_rand(3, 7);
	for ($i = 0; $i < $n_lines; $i++)
	{
		$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	}
	$hash = password_hash($captcha, PASSWORD_BCRYPT);

	session_start();
	$_SESSION["captcha"] = $hash;
	imagepng($img);
	imagedestroy($img);
?>
