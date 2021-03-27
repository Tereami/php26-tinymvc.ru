<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitename</title>
</head>

<body>
    <header>
        <h1>Пример сайта на MVC</h1>
        <div class="menu">
        <div class="menu_item"><a href="/">Главная</a></div>
        <div class="menu_item"><a href="/portfolio">Портфолио</a></div>
        <div class="menu_item"><a href="/about">О нас</a></div>
        </div>
    </header>
    <div class="content">
        <?php include $contentView; ?>
    </div>
    <footer>
        <p>&copy; 2021 Zuev Aleksandr, Inc.</p>
    </footer>

</body>

</html>