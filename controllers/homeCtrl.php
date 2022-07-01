<?php

require (__DIR__.'/../helpers/formChecker.php');
require (__DIR__.'/../helpers/formGenerator.php');
require (__DIR__.'/../config/navUser.php');



if(empty($_COOKIE)){
    header("Location:http://rssreader.localhost/controllers/parametersCtrl.php");
} else {

$urlSec = "https://www.01net.com/actualites/securite/feed/";
$urlTech = "https://www.01net.com/actualites/technos/feed/";
$urlPc = "https://www.01net.com/actualites/produits/pc-peripheriques/feed/";
$rssSec = simplexml_load_file($urlSec);
$rssTech = simplexml_load_file($urlTech);
$rssPc = simplexml_load_file($urlPc);

include __DIR__.'/../views/template/header.php';
include __DIR__.'/../views/home.php';
include __DIR__.'/../views/template/footer.php';

}