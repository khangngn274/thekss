<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tbl_news';
    
    protected $fillable = ['news_id','news_name','news_name_en','news_alias','news_thumbnail','news_status','news_description','news_description_en','news_category_id','news_view','create_by','update_by'];

    protected $hidden = [
        'remember_token',
    ];

    public function newscategory()
    {
    	return $this->belongto('App\Models\NewsCategory');
    }
    
}

