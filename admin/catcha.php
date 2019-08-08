<?php 
session_start();

function randomId($len = 16){
    $id = '';
    for($i = 0; $i < $len; $i++){
        $char = rand(65, 90);
        $id .= chr(char);
    }
    return $id;
}

$width = 70;
$height = 25;
$font = 6;

$string = randomId(6);

$_SESSION['captcha'] = $string;

$fontwidth = ImageFontWidth($font) * strlen($string);
$fontheight = ImageFontHeight($font);
$im = @imagecreate($width, $height);

$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate( $im , rand(0,100) , rand(0,100) , rand(0,100));

imagestring($im, $font, rand(3,$width-$fontwidth-3), rand(2, $height-$fontheight-3), $string, $text_color);

header("Content-type: image/jpeg");
imagejpeg($im,'',90);

?>