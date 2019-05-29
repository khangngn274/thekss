<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_product';

    protected $fillable = ['product_id','product_category_id','product_name','product_name_en','product_code','product_applications','product_applications_en','product_specification','product_specification_en','product_description','product_description_en','product_features','product_features_en','product_price','product_image','product_status'];

    public function category()
    {
    	return $this->belongto('App\Models\Category');
    }
}
