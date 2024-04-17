<?php
if (isset($_POST['login'])
&& isset($_POST['password'])
&& isset($_POST['submitButton'])
&& !empty($_POST['login'])
&& !empty($_POST['password'])){
    $status = "";

    require_once '../db/connection.php';

    $data=$conn->prepare("SELECT login, password FROM admins WHERE login=? AND password=?");
    $data->execute(array($_POST['login'], $_POST['password']));
    $data=$data->fetch();

    if ($data){
        session_start();
        $_SESSION['isAdmin'] = true;
        $status = "../adminPanel.php";
    } else {
        $status = "../loginPage.php?code=1";
    }

    header('location:'.$status);
}
?>