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
            <?php include 'header.html' ?>
            <div class="news">
                <div class="note" style="border-color: white">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <form method="post" enctype="multipart/form-data" action="/scripts/insert.php">
                                <input type="text" placeholder="Введите заголовок новости"
                                       style="margin-top: 3px; margin-right: 10px; height: 33px;
                                       padding-left: 15px; width: 90%; border-color: black; " name="header">
                                <textarea rows="10" name="body" style="margin-top: 5px; width: 90%;
                                                            border-color: black" ></textarea>
                                <input type="email" placeholder="Введите e-mail автора"
                                       style="margin-top: 3px; height: 33px;
                                       padding-left: 15px; width: 90%; border-color: black" name="email">
                                <input type="file" name="file" class="btn" >
                                <input type="submit" value="Сохранить" class="btn" style="margin-right: 40px;
                                                    margin-top: 5px;
                                                    margin-bottom: 5px;
                                                    background-color: white;
                                                    border-color: black;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'?>
        </div>
    </body>
</html>