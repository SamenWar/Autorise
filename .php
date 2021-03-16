<?php
setcookie();
session_start();
if (!isset($_COOKIE['login']) || !isset($_COOKIE['pass'])){
    echo "зарегестрируйтесь";
    $_COOKIE['login'] = $_POST['login'];
    $_COOKIE['pass'] = $_POST['pass'];
}else{
    echo "autoreise";
    if ($_COOKIE['login'] === $_POST['login'] &&  $_COOKIE['pass'] === $_POST['pass']){
        $N = $_POST['login'];
        echo "здравствуйте ";
    }

}
