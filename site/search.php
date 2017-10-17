<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <title>Результаты поиска</title>
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
        <h2 style="text-align: center;
                            font-size: 2em;
                            font-family: Baskerville Old Face;"><b>Результаты поиска по такому-то запросу</b></h2>
        <div class="note">
            <div class="row">
                <div class="col-sm-8">
                    <h3 style="font-family: Baskerville Old Face; padding: 10px; text-align: center"> <b>Сегодня снова ничего не произошло</b></h3>
                    <p style="padding: 10px; font-family: Arial; text-align: justify; border-bottom-color: black">Здесь тоже что-то должно быть написано, поэтому давайте сделаем вид, будто так и есть, потому что мне лень искать какие-то новости, а для шаблона и так сойдёт.</p>
                    <p style="padding: 10px; font-family: Arial; text-align: justify; border-bottom: double; border-bottom-color: black">А вместо картинки я пока поставлю сюда трогательный момент с Шанксом и Луффи</p>
                    <p style="margin-left: 5px"><b>garaninanatalya3@gmail.com</b></p>
                    <a href="news.php">
                        <button class="btn" style="margin-left: 5px;
                                            margin-right: 40px;
                                            margin-top: 3px;
                                            margin-bottom: 5px;
                                            background-color: white;
                                            border-color: black;">Редактировать новость</button>
                    </a>
                    <button class="btn" style="margin-left: 5px;
                                            margin-right: 40px;
                                            margin-top: 3px;
                                            margin-bottom: 5px;
                                            background-color: white;
                                            border-color: black;">Удалить новость</button>
                </div>
                <div class="col-sm-4">
                    <img src="https://pp.userapi.com/c639731/v639731928/56f30/Q4LO10iLwCE.jpg" class="photocard">
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