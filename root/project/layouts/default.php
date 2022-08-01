<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/project/webroot/css/styles.css">
</head>
<body>
<?php if (!empty($_SESSION['user'])):?>
<header>
    <div class="staffHeader">
        <div class="tables">
            <a href="/staff/">Таблица сотрудников</a>
            <a href="/institutions/">Таблица Поликлиник</a>
        </div>
        <form class="exitForm" method="post">
            <button class="exit" name="exit">Выход</button>
        </form>
    </div>
</header>
<?php endif; ?>
<?= $content ?>
</body>
</html>