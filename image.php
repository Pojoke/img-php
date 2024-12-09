<?php
// Создание изображения 100*30
$im=imagecreatefromjpeg("./images/O2-Icon.jpg");
// Желтый фон, синий текст
// $bg = imagecolorallocate($im, 255, 255, 0);
$textcolor = imagecolorallocatealpha($im, 0, 0, 0, 90);
$transparen=imageColorTransparent($im, $textcolor);
// Надпись в левом верхнем углу
imagestring($im, 5, 50, 50, 'My_images', $textcolor);
// Вывод изображения в стандартный выходной поток - в браузер
header('Content-type: image/jpg');
imagepng($im);
//освобождение памяти, занятой картинкой
imagedestroy($im);