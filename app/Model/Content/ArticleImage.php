<?php

namespace App\Model\Content;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $table = 'article_images';
    protected $guarded = ['deleted_at','created_at','updated_at'];

    public $appends = [
        'compressed_url'
    ];

    public function getImageAttribute($value){
        if ($value) {
            if (file_exists(storage_path('app/public/' . $value))) {
                return asset('storage/' . $value);
            } else if (file_exists(public_path($value))) {
                return asset($value);
            }
	}
	return $value;
    }

    public function getCompressedUrlAttribute(){
        if ($this->compressed_image){
            if (file_exists(storage_path('app/public/' . $this->compressed_image))) {
                return asset('storage/' . $this->compressed_image);
            } else if (file_exists(public_path($this->compressed_image))) {
                return asset($this->compressed_image);
            }
	}
    }
}
