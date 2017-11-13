<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $news = new News();
        $news->header = $request->get('header');
        $news->body = $request->get('body');
        $news->email = $request->get('email');
        $dir = '/images/';
        $uploadfile = $dir . basename($_FILES['file']['name'] );
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "Файл был успешно загружен.\n";
        } else {
            echo "Ошибка при загрузке файла\n";
        }
        $news->url = $request->get('url');
        $news->date = $request->get('date');
        $news->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->header = $request->get('header');
        $news->body = $request->get('body');
        $news->email = $request->get('email');
        $news->url = $request->get('url');
        $news->date = $request->get('date');
        $news->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
    }
}
