<?php
require_once("../init.php");


SalvarTime(isset($_REQUEST)?$_REQUEST:array());

function SalvarTime($request){
    $time = new Time();
    $time->setNome(seExisteRequest('nome', ''));

    $_SESSION['times'][] = $time;

    header('Location: ../View/times.php');
}

function seExisteRequest($key, $return){
    if(!$return)
        $return = false;
    return isset($_REQUEST)?(isset($_REQUEST["$key"])?($_REQUEST["$key"]):$return):$return;
}
