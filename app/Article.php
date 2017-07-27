<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

public function getShortContentAttribute($value)
{
    return substr($this->content,0,random_int(70,150)).'...';
}

protected $dates=['post_on'];
}
