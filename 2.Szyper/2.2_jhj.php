<?php
echo $_SERVER['SCRIPT_NAME']; // /
echo $_SERVER['SERVER_PROTOCOL']; //
echo $_SERVER['DOCUMENT_ROOT'];
//$localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
$localFile = $_SERVER['DOCUMENT_ROOT'];
$localFile .= $_SERVER['SCRIPT_NAME'];
echo '<br>', $localFile;
##########################################
//STAŁe
//nazwy z duzych liter
define('NAME','JANUSZ');
echo '<br>',NAME;
define('surname','Kowalski');
echo '<br>',surname;
define('COUNTRY','POLSKA',true);
echo '<br>',COUNTry,'<hr>';
###################################
//stale predefiniowane
echo PHP_VERSION; //5.6.14
echo gettype(PHP_VERSION),'<br>'; //string
if (PHP_VERSION > 5.6) {
    echo 'Nowa wersja PHP';
}
else{
  echo "Stara wersja PHP";
}
 echo PHP_OS,'<br>'; //WINNT
echo __LINE__,'<br>'; //40
echo __FILE__,'<br>'; //
echo __DIR__,'<br>';
 ?>
