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
        $dir = 'images/';
        $uploadfile = $dir . basename($_FILES['file']['name'] );
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile) or die();
        $news->url = $uploadfile;
        $news->date = date("Y-m-d");
        $news->save();
        return redirect('/');
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

    public static function update($data, $file){
        $news = News::find($data['id']);
        $news->header = $data['header'];
        $news->body = $data['body'];
        $news->email = $data['email'];
        $dir = 'images/';
        $uploadfile = $dir . basename($file['file']['name'] );
        move_uploaded_file($file['file']['tmp_name'], $uploadfile) or die();
        $news->url = $uploadfile;
        $news->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     */
    public static function destroy($id)
    {
        News::destroy($id);
        //$news->delete();
    }

    public static function search($request){
        $str = '%' . $request . '%';
        $news = News::query()->where('header', 'LIKE', $str)->orderByDesc('date')->get();
        return $news;
    }
}
