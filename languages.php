<?php
session_start();

if (isset($_REQUEST["locale"])) {
  $locale = $_REQUEST["locale"];
}
else if (isset($_SESSION["locale"])) {
  $locale  = $_SESSION["locale"];
}
else {
  $locale = "bn_BD";
} 
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain("openSIS", "./locale");
textdomain("openSIS");
?>

