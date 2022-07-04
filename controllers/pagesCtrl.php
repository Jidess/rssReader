<?php

require (__DIR__.'/../config/data.php');
require (__DIR__.'/../helpers/formChecker.php');
require (__DIR__.'/../helpers/formGenerator.php');
require (__DIR__.'/../config/navUser.php');

if(empty($_COOKIE)){
    header("Location:http://rssreader.localhost/controllers/parametersCtrl.php");
} else {

include __DIR__.'/../views/template/header.php';
include __DIR__.'/../views/pages.php';
include __DIR__.'/../views/template/footer.php';

}