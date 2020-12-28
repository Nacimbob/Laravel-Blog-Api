<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    protected $fillable=['name','description','content'];

    protected $guarded=['article_id','blog_id'];

}
