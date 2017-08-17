<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable=['user_id','content','live','post_on'];

public function getShortContentAttribute($value)
{
    return substr($this->content,0,random_int(70,150)).'...';
}

public function setPostOnAttribute($value){
    $this->attributes['post_on']=Carbon::parse($value);
}

protected $dates=['post_on'];

public  function  setLiveAttribute($value){
    $this->attributes['live']= (boolean)($value);
}
}
