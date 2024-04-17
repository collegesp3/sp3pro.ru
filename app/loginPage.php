<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЩЕЛКОВСКИЙ КОЛЛЕДЖ СП3 - Авторизация</title>
    <link rel="stylesheet" href="./css/admin_style.css">
</head>
<body>
    <main class="fl col a-center">
        <form action="./php/authorization.php" method="POST" class="fl col">
            <div class="fl col a-center">
                <h1 class="m-5-b">Авторизация</h1>
                <?php if (isset($_GET['code']) && $_GET['code'] == 1): ?>
                <p class="m-5-b red">Неверный логин или пароль!</p>
                <?php endif; ?>
            </div>
            <input class="m-5-b" type="text" name="login" placeholder="Логин" required>
            <input class="m-5-b" type="password" name="password" placeholder="Пароль" required>
            <input type="submit" name="submitButton" value="Войти">
        </form>
    </main>
</body>
</html>