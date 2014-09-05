<?php

/*  BORDE DE TEXTO */
/*
function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
    for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
        for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
            $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
   return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
}

$borde_color = imagecolorallocate($im, 0, 0, 0);

imagettfstroketext($im, $fontsizeinPT, 0, $PosX-8, $PosY+$fontsizeinPT, $color, $borde_color, $font, $texto, 1);
*/

//IMAGEN
$imagen = $_POST["imagen"];

//VARIABLES PARA TEXTO
$texto 			= $_POST["texto"];
$textoTamano 	= $_POST["textoTam"];
$textoColor 	= $_POST["color"];
$textoFuente	= $_POST["fuente"];

//SEPARAR COLOR
$color1=explode("rgb", $textoColor);
$color2=explode("(", $color1[1]);
$color3=explode(")", $color2[1]);
$color4=explode(", ", $color3[0]);

//RGB
$textoColor=explode(", ", $color3[0]);

//PIXELES A PUNTOS
$fontsizeinPT = ($textoTamano*3)/4;

//POSICION DE TEXTO
$PosX = $_POST["imgX"];
$PosY = $_POST["imgY"];

//IMAGEN DE FONDO
$im = imagecreatefromjpeg('fondo/'.$imagen);

//COLOR DE TEXTO
$textoColor = imagecolorallocate($im, $textoColor[0], $textoColor[1], $textoColor[2]);

//TIPO DE LETRA
$font = "texto/".$textoFuente.".ttf";

//CARPETA EN DONDE SE GUARDARAN IMAGENES
$uploads_dir = 'uploaded_files/';

//NOMBRE DE IMAGEN Y CARPETA EN DONDE SE GUARDARÁ
$name = $uploads_dir."imagen.jpg";

//SOMBRA DE TEXTO
//imagettftext($im, 50, 0, $x, $y+1, $white, $font, $text);

//TEXTO EN IMAGEN
imagettftext($im, $fontsizeinPT, 0, $PosX-8, $PosY+$fontsizeinPT, $textoColor, $font, $texto);

//MANDAR IMAGEN
imagejpeg($im,$name,100);

//DESTRUIR IMAGEN
imagedestroy($im);

$resp = array("texto" => "Listo!");

echo json_encode($resp);

?>