<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'tbl_project';
    
    protected $fillable = ['project_id','project_name','project_name_en','project_description','project_description_en','project_thumbnail','project_alias','project_status'];

    protected $hidden = [
        'remember_token',
    ];
}
