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
    <div id="app" >
        <div class="lenta">
            <h2 class="feed"><b>Результаты поиска по запросу "@{{ request }}"</b></h2>
            <div class="note" v-for="element in news">
                <div class="row" >
                    <div class="col-sm-8" >
                        <h3 style="font-family: Baskerville Old Face; padding: 10px;
                                text-align: center"><b>@{{ element.header }}</b></h3>
                        <p class="content">@{{ element.body }}</p>
                        <p class="content"><b>@{{ element.email }}</b></p>
                        <div class="row">
                            <form class="col-sm-6" method="post" action="/edit_news">
                                <input name="_method" type="hidden" value="GET">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" v-model="element.id">
                                <input type="submit" class="btn" style="margin-left: 5px;
                                            margin-right: 40px;
                                            margin-top: 3px;
                                            margin-bottom: 5px;
                                            background-color: white;
                                            border-color: black;" value="Редактировать новость">
                            </form>
                            <form class="col-sm-6" action="/destroy" method="post">
                                <input name="_method" type="hidden" value="GET">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" v-model="element.id">
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
                        <p class="content"><b>@{{ element.date }}</b></p>
                        <img :src="element.url" class="photocard">
                    </div>
                </div>
            </div>
        </div>
        {{--<ul class="pager">--}}
            {{--<li v-on:click = "prevPage" v-if="pagenumber > 1"><a href="#">Предыдущая</a></li>--}}
            {{--<li v-on:click = "nextPage" v-if="pagenumber < maxPage"><a href="#">Следующая</a></li>--}}
        {{--</ul>--}}
    </div>
    @include('footer');
    <script type="text/javascript">
        window.news = <?=json_encode($news);?>;
        window.request = <?=json_encode($request);?>;
    </script>
    <script type="text/javascript" src={{ URL::asset('js/myjs.js') }}></script>
</div>
</body>
</html>