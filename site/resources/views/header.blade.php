<div class="main-rec">
    <h1 class="hero-unit">
        <a class="brand" href="/" style="color: white">
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
        <form class="form-group" action="/search" method="post">
            <input name="_method" type="hidden" value="GET">
            {{ csrf_field() }}
        <a href="/add_news">
            <button class="btn col-sm-2 " style="
                        margin-left: 50px;
                        width: 150px;
                        margin-top: 3px;
                        background-color: white;
                        border-color: black;">Добавить новость</button>
        </a>
        <input type="text" placeholder="Поиск по сайту..."
               style="margin-top: 3px; /*margin-left: 540px;*/ height: 33px;
                           padding-left: 15px"
               class="col-sm-3 col-sm-offset-4"
        name="request">
        <input type="submit" class="btn col-sm-1" style="
                        margin-left: 5px;
                        margin-right: 40px;
                        margin-top: 3px;
                        background-color: white;
                        border-color: black;" value="Поиск">
        </form>
    </div>
</div>