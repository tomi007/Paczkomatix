<?php

require_once './User.php';
header('Content-Type: application/json');


$params = explode('/',explode('router.php', $_SERVER['REQUEST_URI'])[1]);

//var_dump($params);

switch($params[1]){
    case 'user':
            include_once './routings/UserRouting.php';
        break;
    case 'address':

        break;

}


