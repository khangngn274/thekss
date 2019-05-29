<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'tbl_news_category';
    
    protected $fillable = ['news_category_id','news_category_name','news_category_name_en','news_category_alias','news_category_status'];

    protected $hidden = [
        'remember_token',
    ];

    public function news()
    {
    	return $this->hasMany('App\Models\News');
    }
}



