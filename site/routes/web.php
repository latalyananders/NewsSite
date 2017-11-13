<?php
    use \App\News as News;
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
    $up = 9;
    if($up > count($news)){
        $up = count($news) - 1;
    }
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