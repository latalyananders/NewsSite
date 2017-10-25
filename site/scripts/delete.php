<?php
        $user = 'root';
        $pass = '';
        $db = 'news';
        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
        mysqli_select_db($db, 'news');
        mysqli_query($db, 'set names utf8');
        $id = $_POST['id'];
        $query = 'delete from news where id = ' . $id . ';';
        echo $query;
        mysqli_query($db, $query) or die("\nОшибка при выполнении запроса ");
        echo "\nНовость удалена";
        mysqli_close($db);
?>