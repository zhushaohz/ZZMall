<?php
if($_GET['action']=="logout"){
    header('Refresh:1; url="http://localhost/login"');
    session_start();
    setcookie("cookiename", NULL);
    session_unset();
    session_destroy();
}