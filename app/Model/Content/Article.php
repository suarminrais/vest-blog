<?php

namespace App\Model\Content;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = ['deleted_at','created_at','updated_at'];

    public function images(){
        return $this->hasMany('App\Model\Content\ArticleImage','article_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Model\Content\Tag','article_tags','article_id','tag_id');
    }

    public function author(){
        return $this->belongsTo('App\Model\Content\Author','author_id');
    }
}
