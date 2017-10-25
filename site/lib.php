<?php
    function connect(){
        $user = 'root';
        $pass = '';
        $db = 'news';
        //$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
        return new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
    }

    function insert($header, $body, $email, $url){
        $query = 'insert into news values($header, $body, $email, $url, date(\'l jS \of F Y h:i:s A\'))';
        $result = mysqli_query(connect(), $query) or die("Ошибка ");
        mysqli_close();
    }
?>