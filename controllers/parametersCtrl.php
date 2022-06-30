<?php
    require_once(__DIR__.'/../helpers/formChecker.php');
    require_once(__DIR__.'/../helpers/formGenerator.php');
    $checkDataForm = new CheckDataForm();
    $formGenerator = new FormGenerator();


    require_once __DIR__.'/../config/data.php';
    include __DIR__.'/../views/template/header.php';
    include __DIR__.'/../views/parameters.php';
    // echo $checkDataForm->howMuchChecked();
    include __DIR__.'/../views/template/footer.php';

?>


<!-- // setcookie('user_id', '1234'); -->


