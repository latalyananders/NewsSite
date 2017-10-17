<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <title>Самые новые новости</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="main-rec">
        <h1 class="hero-unit">
            <a class="brand" href="/index.php" style="color: white">
                <strong>
                    <em>
                        САМЫЕ<br>НОВЫЕ<br>НОВОСТИ
                    </em>
                </strong>
            </a>
        </h1>
    </div>
    <div class="admin-rec">
        <div class="row">
            <a href="news.php">
                <button class="btn col-sm-2 "
                        style="
                        margin-left: 50px;
                        width: 150px;
                        margin-top: 3px;
                        background-color: white;
                        border-color: black;"
                >Добавить новость</button>
            </a>
            <input type="text" placeholder="Поиск по сайту..."
                   style="margin-top: 3px; /*margin-left: 540px;*/ height: 33px;
                           padding-left: 15px"
                   class="col-sm-3 col-sm-offset-4">
            <a href="search.php">

                <button class="btn col-sm-1 " style="
                        margin-left: 5px;
                        margin-right: 40px;
                        margin-top: 3px;
                        background-color: white;
                        border-color: black;"
                >Поиск</button>
            </a>
        </div>
    </div>
    <div class="news">
        <div class="note">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <input type="text" placeholder="Введите заголовок новости"
                           style="margin-top: 3px; margin-right: 10px; height: 33px;
                           padding-left: 15px; width: inherit; border-color: black; ">
                    <textarea rows="10" style="margin-top: 5px; width: inherit;
                                                border-color: black"></textarea>
                    <input type="email" placeholder="Введите e-mail автора"
                           style="margin-top: 3px; height: 33px;
                           padding-left: 15px; width: inherit; border-color: black">
                    <input type="url" placeholder="Укажите url-адрес картинки"
                           style="margin-top: 3px; height: 33px;
                           padding-left: 15px; width: inherit; border-color: black">
                    <a href="index.php">
                        <button class="btn" style="margin-right: 40px;
                                            margin-top: 5px;
                                            margin-bottom: 5px;
                                            background-color: white;
                                            border-color: black;">Сохранить</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-rec" style="
                    font-family: Baskerville Old Face;
                    font-size: 2em;
                    padding-left: 20px">
        <p><b>Информация о том, кто сделал этот сайт</b></p>
    </div>
</div>
</body>
</html>