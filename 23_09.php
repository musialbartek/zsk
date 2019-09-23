<?php
$x=1;
$y=1.0;

if($x===$y){
    echo "identyczne<hr>";
}else{
    echo "różne<hr>";
}

$x=2;
echo $x++;//
echo ++$x;//
echo $x;//
$y = $x++;
echo $y;//
$y=++$x;
echo $y;//
echo ++$y;//

$text='123ssd';

$x=(int)$text;
echo $x,'<hr>'; //123


$text1=12;
$x1=(bool)$text1;
echo $x1;

$text2=100;
$x2=(unset)$text2;
echo $x2;
?>