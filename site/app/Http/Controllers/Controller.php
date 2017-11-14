<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function query($number_page){
        $news = \App\News::query()->orderByDesc('date')->get();
        $down = ($number_page - 1) * 10;
        $up = $number_page * 10 - 1;
        if($up > count($news)){
            $up = count($news) - 1;
        }
        $result = array($up - $down);
        $index = 0;
        for($i = $down; $i <= $up; $i++){
            $result[$index] = $news[$i];
            $index++;
        }
        return $result;
    }
}
