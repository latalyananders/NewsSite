<?php
    $header = $_POST['header'];
    $body = $_POST['body'];
    $email = $_POST['email'];
    $image = $_FILES['file']['name'];
    validation($header, $body, $email, $image);
    echo $image;
        $dir = '../images/';
        $uploadfile = $dir . basename($_FILES['file']['name'] );
    echo '<br>' . $uploadfile;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "Файл был успешно загружен.\n";
        } else {
            echo "Ошибка при загрузке файла\n";
        }

    $user = 'root';
    $pass = '';
    $db = 'news';
    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
    mysqli_select_db($db, 'news');
    mysqli_query($db, 'set names utf8');
    $url = '/images/' . $_FILES['file']['name'];
    $query = 'insert into news (header, body, email, url, date) values(\''. $header . '\', \'' . $body . '\', \'' . $email . '\', \'' . $url . '\', \'' . date('l jS \of F Y h:i:s A') . '\');';//.  . '\');';
    echo $query;
    mysqli_query($db, $query) or die("\nОшибка при выполнении запроса ");
    mysqli_close($db);

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
