<?php

//By. @UzMaxBoy
$text=$_GET["text"];

header('content-type: image/jpg');

$img=imagecreatefromjpeg('rasm.jpg');
$rang=imagecolorallocate($img, 255, 255, 255);
//By. @UzMaxBoy

$son= strlen($text);
if($son=="1"){
   $x = 550;
    $y = 625;  
    $size = 135;

}
if($son=="2"){
   $x = 530;
    $y = 625;  
    $size = 135;

}
if($son=="3"){
   $x = 520;
    $y = 625;  
    $size = 135;

}
if($son=="4"){
    $x = 500;
    $y = 625;  
    $size = 135;
    }
    if($son=="5"){
        $x = 450;
        $y = 625; 
        $size = 135;
        }
        if($son=="6"){
            $x = 410;
            $y = 625;  
            $size = 135;
            }
            if($son=="7"){
                $x = 380;
                $y = 625;  
                $size = 135;
                }
                if($son=="8"){
                    $x = 350;
                    $y = 625;  
                    $size = 135;
                    }
                    if($son=="9"){
                        $x = 329;
                        $y = 625;  
                        $size = 135;
                        }
                        if($son=="10"){
                            $x = 310;
                            $y = 625;  
                            $size = 135;
                            }          
if($son=="11"){
                            $x = 300;
                            $y = 625;  
                            $size = 135;
                            }          
if($son=="12"){
                            $x = 280;
                            $y = 625;  
                            $size = 135;
                            }          
if($son=="13"){
                            $x = 270;
                            $y = 625;  
                            $size = 135;
                            }          
if($son=="14"){
                            $x = 260;
                            $y = 625;  
                            $size = 135;
                            }          
if($son=="15"){
                            $x = 240;
                            $y = 625;  
                            $size = 135;
                            }          
//By. @UzMaxBoy

$txt=$text;
$font="1.ttf"; 

//By. @UzMaxBoy
imagettftext($img, $size, 0, $x,$y, $rang, $font, $txt);
imagejpeg($img, "challange.jpg");
header("location: challange.jpg");