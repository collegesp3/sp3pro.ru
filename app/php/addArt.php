<?php
session_start();

if (isset($_SESSION['isAdmin'])
&& isset($_FILES['image'])
&& isset($_POST['art'])
&& isset($_POST['submitButton'])
&& $_SESSION['isAdmin']
&& !empty($_POST['art'])){
    $status = "";

    $extensions = array("jpeg","jpg","png"); // Разрешённые форматы
    $MAX_FILE_SIZE = 9437184; // Максимально допустимый размер файла (в байтах)
    $uploaddir = 'img/custom/'; // Путь, куда будут скидываться файлы

    $file_name = $_FILES['image']['name']; // Название загруженного файла
    $file_size =$_FILES['image']['size']; // Размер файла (в байтах)
    $file_tmp =$_FILES['image']['tmp_name']; // Директория, куда загружен файл (временной файл)
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name']))); // В переменную записывается формат файла

    if(in_array($file_ext,$extensions) === false){ // Проверяет, есть ли такой формат файла в массиве допустимых форматов
        $status = '../adminPanel.php?code=1';
    }

    if($file_size > $MAX_FILE_SIZE){ // Проверяет, не превышает ли размер файла допустимого значения
        $status = '../adminPanel.php?code=2';
    }

    if ($status==""){
        require_once './functions/uuid_generator.php'; // Импортируется библиотека для генерации уникального идентификатора
        $newuuid = guidv4();
        $nameimage = $uploaddir.$newuuid.'.'.$file_ext; // Путь будущего нового файла
        move_uploaded_file($file_tmp, '../'.$nameimage); // Перемещение файла из временной папки в нужную директорию

        require_once '../db/connection.php';
        $date=date('Y-m-d h:i:s', time());

        $conn->prepare("INSERT INTO news (`img`, `content`, `datetime`) VALUES (?,?,?)")->execute(array('./'.$nameimage, $_POST['art'], $date));

        $status = "../adminPanel.php?code=0";
    }

    header('location:'.$status);
}
?>