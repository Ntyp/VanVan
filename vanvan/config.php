<?php
    session_start();
    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = 'th';
    else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if($_GET['lang'] == "th")
            $_SESSION['lang'] = 'th';
        else if($_GET['lang'] == "en")
            $_SESSION['lang'] = 'en'; 
    }
    include($_SESSION['lang'].".php");
?>