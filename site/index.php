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
                <h2 class="feed"><b>Лента новостей</b></h2>
                <?php include 'scripts/select_all_news.php';?>
            </div>
            <?php include 'footer.php'?>
        </div>
    </body>
</html>