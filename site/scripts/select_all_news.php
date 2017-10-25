<?php
    $user = 'root';
    $pass = '';
    $db = 'news';
    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
    mysqli_select_db($db, 'news');
    mysqli_query($db, 'set names utf8');
    $query = 'select * from news order by id desc;';
    $result = mysqli_query($db, $query) or die("\nОшибка при выполнении запроса ");
    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="note">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 style="font-family: Baskerville Old Face; padding: 10px; text-align: center"> <b>' . $row['header'] . '</b></h3>
                            <p class="content"> ' . $row['body'] . '</p>
                            <p class="content"><b>'. $row['email'] . '</b></p>
                            <div class="row">
                                <form class="col-sm-6" method="post" action="/scripts/fill_view.php">
                                    <input type="hidden" name="id" value="'. $row['id'] . '">
                                    <input type="submit" class="btn" style="margin-left: 5px;
                                            margin-right: 40px;
                                            margin-top: 3px;
                                            margin-bottom: 5px;
                                            background-color: white;
                                            border-color: black;" value="Редактировать новость">
                                </form>
                                <form class="col-sm-6" action="/scripts/delete.php" method="post">
                                    <input type="hidden" name="id" value="'. $row['id'] . '">
                                    <input type="submit" class="btn" style="margin-left: 5px;
                                                margin-right: 40px;
                                                margin-top: 3px;
                                                margin-bottom: 5px;
                                                background-color: white;
                                                border-color: black;" value="Удалить новость">
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <p class="content"><b>' . $row['date'] . '</b></p>
                        <img src="' . $row['url'] . '" class="photocard">
                        </div>
                    </div>
                </div>';
    }
    mysqli_close($db);
?>