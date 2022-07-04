<?php
    if(isset($_COOKIE['user_sujet_choice']) && isset($_COOKIE['user_radio_choice'])){
        $arrayThemeCookies = unserialize($_COOKIE['user_sujet_choice']);
        $sujet1 = $arrayThemeCookies[0];
        $sujet2 = $arrayThemeCookies[1];
        $sujet3 = $arrayThemeCookies[2];
        $radioCookie = $_COOKIE['user_radio_choice'];
    } 