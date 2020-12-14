<?php

namespace App\Model\Content;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $guarded = ['deleted_at','created_at','updated_at'];

    public function articles(){
        return $this->belongsToMany('App\Model\Content\Article','article_tags','tag_id','article_id');
    }
}
