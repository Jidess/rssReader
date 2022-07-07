<?php

require (__DIR__.'/../config/data.php');
require (__DIR__.'/../helpers/formChecker.php');
require (__DIR__.'/../helpers/formGenerator.php');
require (__DIR__.'/../config/navUser.php');

if(empty($_COOKIE['user_sujet_choice'])){
    header('location:/controllers/parametersCtrl.php');
} else {

include __DIR__.'/../views/template/header.php';
include __DIR__.'/../views/home.php';
include __DIR__.'/../views/template/footer.php';

}

