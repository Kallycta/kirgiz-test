<?php
    $url = explode('/',strtolower(substr($_SERVER['REQUEST_URI'], 1)));

    switch($url[0]) {
        case '': { 
            include 'index.html';
            break;
        }
        case 'policy':{
            include 'policy.html';
            break;
        }
        case 'newPage': {
            include 'otzyvy.html';
            break;
        }
        default:
            include 'index.html';
            break;
    }
?>