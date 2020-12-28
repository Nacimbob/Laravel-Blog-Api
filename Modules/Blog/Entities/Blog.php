<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{

    protected $fillable=['title','description'];

    protected $guarded=['blogger_id'];

}
