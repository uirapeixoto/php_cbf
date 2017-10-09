<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 07/10/2017
 * Time: 21:45
 */
spl_autoload_register(function ($class_name) {
    include "../Model/".$class_name . '.class.php';
});
session_start();