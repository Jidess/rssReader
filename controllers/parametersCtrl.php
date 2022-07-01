<?php
    
    require_once(__DIR__.'/../helpers/formChecker.php');
    require_once(__DIR__.'/../helpers/formGenerator.php');
    require_once(__DIR__.'/../config/data.php');
    $checkDataForm = new CheckDataForm();
    $formGenerator = new FormGenerator();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["checkBox"])){
        $checkedElements = $_POST["checkBox"]; 
        $values = [];
        if(count($checkedElements) == 3){
            foreach ($checkedElements as $value) {
                array_push($values, $value);
            }
            setcookie('user_sujet_choice', serialize($values), time()+60*60*24*30, '/');
            $_COOKIE['user_sujet_choice'] = serialize($values);
            
        } else return 'ERROR';
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["inlineRadio"])){
        $postLength = $_POST["inlineRadio"]; 
        if($postLength == 3 || $postLength == 6 || $postLength == 9 ){
            setcookie('user_radio_choice', $postLength, time()+60*60*24*30, '/');
            $_COOKIE['user_radio_choice'] = $postLength;
        } else return 'ERROR';
    }

    require (__DIR__.'/../config/navUser.php');
    include (__DIR__.'/../views/template/header.php');
    include (__DIR__.'/../views/parameters.php');
    include (__DIR__.'/../views/template/footer.php');
