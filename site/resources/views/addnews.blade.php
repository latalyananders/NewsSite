<!DOCTYPE html>
<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" >
    <title>Самые новые новости</title>
    <link rel="stylesheet" href={{URL::asset('css/style.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/bootstrap-theme.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/bootstrap-theme.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/bootstrap.css')}}>
    <script type="text/javascript" src={{ URL::asset('js/vue.js') }}></script>
    <script type="text/javascript" src={{ URL::asset('js/axios_min.js') }}></script>
</head>
<body>
<div class="container">
    @include('header')
    <div class="news">
        <div class="note" style="border-color: white">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <form method="post" enctype="multipart/form-data" action="/news/create">
                        <input name="_method" type="hidden" value="GET">
                        {{ csrf_field() }}
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
    @include('footer');
    <script type="text/javascript" src={{ URL::asset('js/myjs.js') }}></script>
</div>
</body>
</html>