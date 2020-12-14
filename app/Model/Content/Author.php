<?php

namespace App\Model\Content;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $guarded = ['deleted_at','created_at','updated_at'];

    public function article(){
        return $this->hasMany('App\Model\Content\Article','author_id');
    }

    public function getPhotoAttribute($value){
        if ($value) {
            if (file_exists(storage_path('app/public/' . $value))) {
                return asset('storage/' . $value);
            } else if (file_exists(public_path($value))) {
                return asset($value);
            }
	}
	return $value;
    }
}
