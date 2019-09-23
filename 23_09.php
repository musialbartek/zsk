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

#########################################

$c;
echo $c;
echo @gettype($c);//NULL

echo PHP_INT_SIZE;//4

//echo phpinfo();//PHP Version 7.2.1

########################################

$x=10;
echo is_string($x);//false
echo is_int($x);//1=
echo is_bools($x);
echo is_float($x);
echo is_null($x);

##################################

//zmienne superglobalne

//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SEREVER

echo $_SERVER['SERVER_PORT'];
echo $_SEREVER['SERVER_NAME'];
echo $SERVER['SCRIPT_NAME'];
echo $_SERVER['SERVER_PROTOCOL'];
echo $_SERVER['DOCUMENT_ROOT'];

$lokalPliku = $_SERVER['DOCUMENT_ROOT'];
$_SERVER['SCRIPT_NAME'];

echo $lokalPliku,'<hr>';

###########################################

define('NAZWISKO','KOWAL');
echo NAZWISKO;

define('imie','Janusz');
echo imie;

define ('WIEK',18,true);
echo wiek;
?>