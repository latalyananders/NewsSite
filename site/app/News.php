<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['header', 'body', 'email', 'url', 'date'];
    protected $primarykey = 'id';
}
