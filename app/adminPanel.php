<?php session_start();
if (!isset($_SESSION['isAdmin'])){
    header('location:loginPage.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЩЕЛКОВСКИЙ КОЛЛЕДЖ СП3 - Админ-панель</title>
    <style>
        .fl{ display: flex; }
        .col{ flex-direction: column; }
        .a-center{ align-items: center; }
        .m-15-b{ margin-bottom: 15px; }

        form{
            border: 1px solid black;
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php if (isset($_GET['code']) && $_GET['code']==0): ?>
    <h2>Пост создан!</h2>
    <?php endif; ?>
    <?php if (isset($_GET['code']) && $_GET['code']==1): ?>
    <h2>Это не файл картинки!<br>Разрешённые форматы: .jpeg, .jpg, .png</h2>
    <?php endif; ?>
    <?php if (isset($_GET['code']) && $_GET['code']==2): ?>
    <h2>Данная картинка превышает допустимый размер!<br>Максимальный размер файла: 9 МБ</h2>
    <?php endif; ?>
    <main class="fl">
        <form enctype="multipart/form-data" action="./php/addArt.php" method="POST" class="fl col">
            <div class="fl a-center m-15-b">
                <p>Вставьте картинку:<br>572 x 229</p> <input type="file" name="image" required>
            </div>
            <textarea class="m-15-b" name="art" id="" cols="30" rows="5" placeholder="Введите новость..." required></textarea>
            <input type="submit" name="submitButton" value="Добавить новость">
        </form>
        <a href="./php/logout.php">Выйти</a>
    </main>
</body>
</html>