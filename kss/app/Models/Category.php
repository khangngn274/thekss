<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'tbl_category';
    
    protected $fillable = ['category_parent_id','category_name','category_name_en','category_description','category_alias','category_status'];

    protected $hidden = [
        'remember_token',
    ];
    
    public function product()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
