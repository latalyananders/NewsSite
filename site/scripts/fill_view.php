<?php
    $user = 'root';
    $pass = '';
    $db = 'news';
    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
    mysqli_select_db($db, 'news');
    mysqli_query($db, 'set names utf8');
    $query = 'select * from news where id = ' . $_POST['id'];
    $result = mysqli_query($db, $query) or die("\nОшибка при выполнении запроса ");
    $row = mysqli_fetch_array($result);

    echo '<html>
    <head>
        <meta charset="utf-8" >
        <title>Самые новые новости</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <?php include \'header.html\'?>
                        <div class="news">
                            <div class="note" style="border-color: white">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-11">
                                        <form method="post" enctype="multipart/form-data" action="/scripts/update.php">
                                            <input type="text" value="' . $row['header'] . '" placeholder="Введите заголовок новости"
                                                   style="margin-top: 3px; margin-right: 10px; height: 33px;
                                                   padding-left: 15px; width: 90%; border-color: black; " name="header">
                                            <textarea rows="10" name="body" style="margin-top: 5px; width: 90%;
                                                                        border-color: black" >'. $row['body'] .'</textarea>
                                            <input type="email" value="' . $row['email'] . '" placeholder="Введите e-mail автора"
                                                   style="margin-top: 3px; height: 33px;
                                                   padding-left: 15px; width: 90%; border-color: black" name="email">
                                            <input type="file" value="' . $row['url'] . '" name="file" class="btn" >
                                            <input type="hidden" name="id" value="'. $_POST['id'] . '">
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
            </div>
        <?php include \'footer.php\'?>
    </body>
</html>';

    function validation($header, $body, $email, $url){
        if(empty($header)){
            echo "Заголовок новости не может быть пустым\n";
            die();
        }
        if(empty($body)){
            echo "Текст новости не может быть пустым\n";
            die();
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "E-mail ($email) указан неверно.\n";
            die();
        }
    }
?>