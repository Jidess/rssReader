<?php

require (__DIR__.'/../helpers/formChecker.php');
require (__DIR__.'/../helpers/formGenerator.php');
require (__DIR__.'/../config/navUser.php');
// require (__DIR__.'/../config/data.php');

if(empty($_COOKIE)){
    header("Location:http://rssreader.localhost/controllers/parametersCtrl.php");
} else {

$urlSec = "https://www.01net.com/actualites/securite/feed/";
$urlTech = "https://www.01net.com/actualites/technos/feed/";
$urlPc = "https://www.01net.com/actualites/produits/pc-peripheriques/feed/";
$urlGame = "https://www.01net.com/actualites/jeux/feed/";
$urlAudio = "https://www.01net.com/actualites/produits/audio-produits/feed/";
$urlObjects = "https://www.01net.com/actualites/produits/objets-connectes-produits/feed/";
$urlProducts = "https://www.01net.com/actualites/produits/feed/";
$urlActu = "https://www.01net.com/actualites/feed/";
$urlMedia = "https://www.01net.com/actualites/culture-medias/feed/";

$rssSec = simplexml_load_file($urlSec);
$rssTech = simplexml_load_file($urlTech);
$rssPc = simplexml_load_file($urlPc);
$rssGame = simplexml_load_file($urlGame);
$rssAudio = simplexml_load_file($urlAudio);
$rssObjects = simplexml_load_file($urlObjects);
$rssProducts = simplexml_load_file($urlProducts);
$rssActu = simplexml_load_file($urlActu);
$rssMedia = simplexml_load_file($urlMedia);

$themes = [
    'Sécurité' => $rssSec,
    'Technos' => $rssTech,
    'PC portables' => $rssPc,
    'Jeux vidéo' => $rssGame,
    'Audio' => $rssAudio,
    'Objets connectés' => $rssObjects,
    'Produits' => $rssProducts,
    'Actualités' => $rssActu,
    'Culture, médias' => $rssMedia,
];

include __DIR__.'/../views/template/header.php';
include __DIR__.'/../views/home.php';
include __DIR__.'/../views/template/footer.php';

}

