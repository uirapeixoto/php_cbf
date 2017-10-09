<?php
require_once("../init.php");

switch (seExisteRequest('limpar',false)) {
    case true:
        limparCampeonato();
        break;
    default:
        echo 'no action';
}

header('Location: ../View/campeonato.php');

function limparCampeonato(){
    unset($_SESSION['jogos']);
    unset($_SESSION['campeonato']);
}

function seExisteRequest($key, $return){
    if(!$return)
        $return = false;
    return isset($_REQUEST)?(isset($_REQUEST["$key"])?($_REQUEST["$key"]):$return):$return;
}
