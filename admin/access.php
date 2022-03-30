<?php

session_start();
if(empty($_SESSION['userUid'])) {
    header('Location: ../index.php');
    die();
}
?>