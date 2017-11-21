<?php
    use \App\News as News;
    use App\Http\Controllers\NewsController as Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $news = News::query()->orderByDesc('date')->get();
    $maxPage =  intdiv(count($news), 10) + 1;
    $down = 0;
    if (count($news) >= 10) $up = 9;
    else $up = count($news);
    $result = array($up - $down);
    $index = 0;
    for($i = $down; $i <= $up; $i++){
        $result[$index] = $news[$i];
        $index++;
    }
    return view('mainpage', ['news'=>$result, 'maxPage'=>$maxPage]);
});

Route::resource('news', 'NewsController');

Route::get('/query/{number_page}', 'Controller@query');

Route::get('/add_news', function (){
    return view('addnews');
});

Route::get('/edit_news', function (){
    $element = News::query()->where('id', '=', $_POST['id'])->get()[0];
    return view('editnews', ['news'=>$element]);
});

Route::get('/destroy', function () {
    Controller::destroy($_POST['id']);
    return redirect('/');
});

Route::get('/update', function (){
    Controller::update($_POST, $_FILES);
    return redirect('/');
});

Route::get('/search', function (){
    $news = Controller::search($_POST['request']);
    return view('search', ['news'=>$news, 'request'=>$_POST['request']]);
});

